<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class TransactionController extends Controller
{
    /**
     * Display a listing of the transactions for Admin.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexAdmin()
    {
        $transactions = Transaction::all();
        if (!$transactions) {
            return response()->json([
                'status' => 'error',
                'message' => 'No Transactions Found.'
            ], 404);
        }

        return response()->json(['status' => 'success', 'data' => $transactions], 200);
    }

    /**
     * Display a listing of the transactions for User.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexUser()
    {
        $transactions = Transaction::where('userID', Auth::user()->id)->get();
        if (!$transactions) {
            return response()->json([
                'status' => 'error',
                'message' => 'No Transactions Found.'
            ], 404);
        }

        return response()->json(['status' => 'success', 'data' => $transactions], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created transaction in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'courseID' => 'required|exists:courses,id',
            'totalPrice' => 'required|min:1',
        ];

        $data = $request->all();
        $validator = Validator::make($data, $rules);
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()
            ], 400);
        }

        $transaction = Transaction::create([
            'userID' => Auth::user()->id,
            'courseID' => $data['courseID'],
            'token' => $this->generateToken(),
            'totalPrice' => $data['totalPrice'],
            'status' => 'Unpaid',
        ]);

        return response()->json(['status' => 'success', 'data' => $transaction], 200);
    }

    public function generateToken($length = 32)
    {
        return Str::random($length);
    }

    /**
     * Display the specified transaction.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $transaction = Transaction::findOrFail($id);
        if (!$transaction) {
            return response()->json([
                'status' => 'error',
                'message' => 'No Transaction Found.'
            ], 404);
        }

        return response()->json(['status' => 'success', 'data' => $transaction], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified transaction in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'courseID' => 'exists:courses,id',
        ];

        $data = $request->all();
        $validator = Validator::make($data, $rules);
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()
            ], 400);
        }

        $transaction = Transaction::findOrFail($id);
        if (!$transaction) {
            return response()->json([
                'status' => 'error',
                'message' => 'No Transaction Found.'
            ], 404);
        }

        $transaction->update(['accceptorID' => Auth::user()->id,
                            'status' => 'Approved'
                            ]);

        return response()->json(['status' => 'success', 'data' => $transaction], 200);
    }

    /**
     * Remove the specified transaction from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $transaction = Transaction::findOrFail($id);
        if (!$transaction) {
            return response()->json([
                'status' => 'error',
                'message' => 'No Transaction Found.'
            ], 404);
        }

        $transaction->delete();

        return response()->json(['status' => 'success', 'message' => 'Transaction Has Been Deleted'], 200);
    }
}
