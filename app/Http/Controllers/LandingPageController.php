<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseReview;
use App\Models\Plan;
use App\Models\PlanDetail;
use App\Models\PlanFeature;
use App\Models\TutorReview;
use App\Models\User;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        $plan = Plan::where('status', 1)->get();
        $planDetail = PlanDetail::get();
        $course = Course::where('isShown', 1)->get();
        $mentor = User::where('isShown', 1)->get();
        $tutorReview = TutorReview::take(3)->get();
        $courseReview = CourseReview::take(3)->get();

        return view('index', compact('plan', 'planDetail', 'course', 'mentor', 'tutorReview', 'courseReview'));
    }
}
