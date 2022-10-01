<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Transaction;
use App\Models\User;
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
        $user = User::where('roleiD', '=', 3)->count();
        $course = Course::where('isActive', '=', 1)->count();
        $transaction = Transaction::where('acceptorID', '!=', null)->count();

        return view('admins.dashboard', compact('user', 'course', 'transaction'));
    }

    /**
     * renderCourse
     *
     * @return void
     */
    public function renderCourse()
    {
        $active = Course::where('isActive', '=', 1)->count();

        $pending = Course::where('isActive', '=', 0)->count();

        $denied = Course::where('isActive', '=', 2)->count();

        $pendingData = Course::where('isActive', '=', 0)->get();

        return view('admins.course', compact('active', 'pending', 'denied', 'pendingData'));
    }

    /**
     * renderPayment
     *
     * @return void
     */
    public function renderPayment()
    {
        $success = Transaction::where('acceptorID', '!=', null)->count();
        $pending = Transaction::where('acceptorID', '=', null)->count();

        return view('admins.payment', compact('success', 'pending'));
    }

    /**
     * renderUserList
     *
     * @return void
     */
    public function renderUserList()
    {
        $user = User::where('roleID', '=', 3)->count();
        $tutor = User::where('roleID', '=', 2)->count();
        return view('admins.userList', compact('user', 'tutor'));
    }
}
