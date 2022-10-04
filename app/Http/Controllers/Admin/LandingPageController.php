<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
        return view('admins.landingPage.plans');
    }

    /**
     * renderCourses
     *
     * @return void
     */
    public function renderCourses()
    {
        return view('admins.landingPage.courses');
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
