<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\CourseType;
use App\Models\Discount;
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
        $transaction = Transaction::where('status', '!=', 'waiting')->count();

        return view('admins.dashboard.dashboard', compact('user', 'course', 'transaction'));
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

        return view('admins.dashboard.course', compact('active', 'pending', 'denied', 'pendingData'));
    }

    /**
     * renderPayment
     *
     * @return void
     */
    public function renderPayment()
    {
        $success = Transaction::where('status', '!=', 'waiting')->count();
        $pending = Transaction::where('status', '=', 'waiting')->count();

        return view('admins.dashboard.payment', compact('success', 'pending'));
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

        return view('admins.dashboard.userList', compact('user', 'tutor'));
    }

    public function renderCreateCourse()
    {
        $data = Course::where('creatorID', Auth::user()->id)->get();
        $type = CourseType::get();
        $discount = Discount::get();

        return view('admins.dashboard.createCourse', compact('data', 'type', 'discount'));
    }
}
