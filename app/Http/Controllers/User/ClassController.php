<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function renderCourseDetail()
    {
        return view('users.courseDetail');
    }

    public function renderCourse()
    {
        return view('users.course');
    }
}
