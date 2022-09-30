<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
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
        return view('admins.dashboard');
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
        return view('admins.payment');
    }
}
