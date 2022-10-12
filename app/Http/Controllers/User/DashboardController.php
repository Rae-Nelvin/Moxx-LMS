<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

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
        return view('users.myCourse');
    }

    /**
     * renderTransaction
     *
     * @return void
     */
    public function renderTransaction()
    {
        return view('users.transaction');
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
