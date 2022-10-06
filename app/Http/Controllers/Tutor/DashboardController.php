<?php

namespace App\Http\Controllers\Tutor;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\CourseType;
use App\Models\Discount;
use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Render Tutor Dashboard
     *
     * @return void
     */
    public function render()
    {
        $data = Course::where('creatorID', Auth::user()->id)->get();
        $type = CourseType::get();
        $discount = Discount::get();
        return view('tutors.dashboard', compact('data', 'type', 'discount'));
    }
}
