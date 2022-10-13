<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Discount;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Str;
use Exception;
use Midtrans;

class CheckoutController extends Controller
{

    public function __construct()
    {
        Midtrans\Config::$serverKey = env('MIDTRANS_SERVERKEY');
        Midtrans\Config::$isProduction = env('MIDTRANS_IS_PRODUCTION');
        Midtrans\Config::$isSanitized = env('MIDTRANS_IS_SANITIZED');
        Midtrans\Config::$is3ds = env('MIDTRANS_IS_3DS');
    }

    /**
     * Store Transaction to Database
     *
     * @return void
     */
    public function store(Request $request)
    {
        dd($request->all());

        $request->validate([
            'courseID' => 'required|exists:courses,id'
        ]);

        $course = Course::find($request->courseID);
        $user = User::find(Auth::user()->id);
        $totalPrice = $course->price;
        if ($request->token) {
            $check = Discount::where('token', $request->token)->first();
            if ($check) {
                $totalPrice = $totalPrice + ($totalPrice * ($check->discounts / 100));
            }
        }

        $checkout = Transaction::create([
            'userID' => $user->id,
            'courseID' => $request->courseID,
            'token' => $request->token,
            'totalPrice' => $totalPrice,
        ]);

        $this->getSnapRedirect($checkout);

        return view('users.success');
    }

    /**
     * Midtrans Handler
     *
     * @param  mixed $transaction
     * @return void
     */
    public function getSnapRedirect(Transaction $checkout)
    {
        $orderID = $checkout->id . '-' . Str::random(5);
        $price = $checkout->course->price;
        $checkout->midtrans_booking_code = $orderID;

        $transaction_details = [
            'order_id' => $orderID,
            'grass_amout' => $price
        ];

        $itemDetails[] = [
            'id' => $orderID,
            'price' => $price,
            'quantity' => 1,
            'name' => "Payment for {$checkout->course->title} Course"
        ];

        $userData = [
            'first_name' => $checkout->user->name,
            'last_name' => '',
            'address' => $checkout->user->address,
            'city' => '',
            'postal_code' => '',
            'phone' => $checkout->user->phone,
            'country_code' => 'IDN',
        ];

        $customerDetails = [
            'first_name' => $checkout->user->name,
            'last_name' => '',
            'email' => $checkout->user->email,
            'phone' => $checkout->user->phone,
            'billing_address' => $userData,
            'shipping_address' => $userData,
        ];

        $midtrans_params = [
            'transaction_details' => $transaction_details,
            'customer_details' => $customerDetails,
            'item_details' => $itemDetails
        ];

        try {
            // Get Snap Payment Page URL
            $paymentUrl = \Midtrans\Snap::createTransaction($midtrans_params)->redirect_url;
            $checkout->midtrans_url = $paymentUrl;
            $checkout->save();

            return $paymentUrl;
        } catch (Exception $e) {
            return false;
        }
    }

    public function midtransCallback(Request $request)
    {
        $notif = new Midtrans\Notification();

        $transaction_status = $notif->transaction_status;
        $fraud = $notif->fraud_status;

        $checkout_id = explode('-', $notif->order_id)[0];
        $checkout = Transaction::find($checkout_id);

        if ($transaction_status == 'capture') {
            if ($fraud == 'challenge') {
                $checkout->payment_status = 'pending';
            } else if ($fraud == 'accept') {
                $checkout->payment_status = 'paid';
            }
        } else if ($transaction_status == 'cancel') {
            if ($fraud == 'challenge') {
                $checkout->payment_status = 'failed';
            } else if ($fraud == 'accept') {
                $checkout->payment_status = 'failed';
            }
        } else if ($transaction_status == 'deny') {
            $checkout->payment_status = 'failed';
        } else if ($transaction_status == 'settlement') {
            $checkout->payment_status = 'paid';
        } else if ($transaction_status == 'pending') {
            $checkout->payment_status = 'pending';
        } else if ($transaction_status == 'expire') {
            $checkout->payment_status = 'failed';
        }

        $checkout->save();
        return view('users.success');
    }
}
