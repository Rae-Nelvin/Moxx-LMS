<?php

namespace App\Http\Controllers\Admin\LandingPage;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Plan;
use App\Models\PlanDetail;
use App\Models\PlanFeature;
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
        $plan = Plan::get();
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
        $course = Course::orderBy('reviews', 'desc')->take(3)->get();
        return view('admins.landingPage.courses', compact('course'));
    }

    /**
     * renderMentors
     *
     * @return void
     */
    public function renderMentors()
    {
        return view('admins.landingPage.mentors');
    }

    /**
     * renderTestimonies
     *
     * @return void
     */
    public function renderTestimonies()
    {
        return view('admins.landingPage.testimonies');
    }
}
