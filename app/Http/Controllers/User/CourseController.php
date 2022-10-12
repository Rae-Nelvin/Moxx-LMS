<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * renderCourseDetail
     *
     * @param  mixed $id
     * @return void
     */
    public function renderCourseDetail($id)
    {
        $course = Course::find($id)->first();
        return view('users.courseDetail', compact('course'));
    }
}
