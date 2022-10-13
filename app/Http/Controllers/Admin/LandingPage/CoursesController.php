<?php

namespace App\Http\Controllers\Admin\LandingPage;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    /**
     * showToLandingPage
     *
     * @param  mixed $id
     * @return void
     */
    public function showToLandingPage($id)
    {
        $check = Course::where('isShown', 1)->count();
        if ($check < 3) {
            $course = Course::where('id', $id)->update(['isShown' => 1]);
            $course = Course::find($id);
            return redirect()->back()->with('success', $course->title . ' berhasil ditampilkan pada halaman utama!');
        }

        return redirect()->back()->with('fail', 'Tolong Unshow 1 atau lebih Course yang terdapat pada Top Courses!');
    }

    /**
     * unshowToLandingPage
     *
     * @param  mixed $id
     * @return void
     */
    public function unshowToLandingPage($id)
    {
        $course = Course::where('id', $id)->update(['isShown' => 0]);
        $course = Course::find($id);

        return redirect()->back()->with('fail', $course->title . ' berhasil tidak ditampilkan pada halaman utama!');
    }
}
