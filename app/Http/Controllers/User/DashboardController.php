<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * render
     *
     * @return void
     */
    public function render()
    {
        $course = Course::get();

        return view('users.dashboard', compact('course'));
    }

    /**
     * renderMyCourse
     *
     * @return void
     */
    public function renderMyCourse()
    {
        $course = DB::table('transactions')
            ->join('courses', 'transactions.courseID', '=', 'courses.id')
            ->join('photos', 'courses.coverID', '=', 'photos.id')
            ->where('transactions.userID', '=', Auth::user()->id)
            ->select('courses.id as id', 'imageURL as imageURL', 'title as title', 'price as price')
            ->get();

        return view('users.myCourse', compact('course'));
    }

    /**
     * renderTransaction
     *
     * @return void
     */
    public function renderTransaction()
    {
        $transaction = Transaction::where('userID', Auth::user()->id)->get();

        return view('users.transaction', compact('transaction'));
    }

    /**
     * renderSetting
     *
     * @return void
     */
    public function renderSetting()
    {
        return view('users.setting');
    }
}
