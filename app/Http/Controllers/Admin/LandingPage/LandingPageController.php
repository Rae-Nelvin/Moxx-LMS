<?php

namespace App\Http\Controllers\Admin\LandingPage;

use App\Http\Controllers\Controller;
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
     * renderPlans
     *
     * @return void
     */
    public function renderPlans()
    {
        $active = Plan::where('status', 1)->get();
        $detail = PlanDetail::get();
        $plan = Plan::where('status', 0)->get();
        $feature = PlanFeature::get();

        return view('admins.landingPage.plans', compact('active', 'plan', 'detail', 'feature'));
    }

    /**
     * renderCourses
     *
     * @return void
     */
    public function renderCourses()
    {
        $shownCourse = Course::where('isShown', 1)->get();
        $unshownCourse = Course::where('isShown', 0)->get();

        return view('admins.landingPage.courses', compact('shownCourse', 'unshownCourse'));
    }

    /**
     * renderMentors
     *
     * @return void
     */
    public function renderMentors()
    {
        $shownMentor = User::where('roleID', 2)->where('isShown', 1)->get();
        $unshownMentor = User::where('roleID', 2)->where('isShown', 0)->get();

        return view('admins.landingPage.mentors', compact('shownMentor', 'unshownMentor'));
    }

    /**
     * renderTestimonies
     *
     * @return void
     */
    public function renderTestimonies()
    {
        $course = CourseReview::get();
        $mentor = TutorReview::get();

        return view('admins.landingPage.testimonies', compact('course', 'mentor'));
    }
}
