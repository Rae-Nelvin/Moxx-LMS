<?php

use App\Http\Controllers\Admin\Dashboard\CourseController;
use App\Http\Controllers\Admin\Dashboard\DashboardController;
use App\Http\Controllers\Admin\LandingPage\CoursesController;
use App\Http\Controllers\Admin\LandingPage\PlanController;
use App\Http\Controllers\Admin\LandingPage\LandingPageController;
use App\Http\Controllers\Admin\LandingPage\MentorController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['isAdmin']], function () {
    Route::prefix('admin/')->name('admin.')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'render'])->name('dashboard');
        Route::get('/payment', [DashboardController::class, 'renderPayment'])->name('renderPayment');
        Route::get('/createCourse', [DashboardController::class, 'renderCreateCourse'])->name('renderCreateCourse');
        Route::post('/newCourse', [CourseController::class, 'renderNewCourse'])->name('renderNewCourse');
        Route::get('/course', [DashboardController::class, 'renderCourse'])->name('renderCourse');
        Route::get('/course/detail/{id}', [CourseController::class, 'courseDetail'])->name('courseDetail');
        Route::get('/course/detail/{courseID}/{sectionID}/{lessonID}', [CourseController::class, 'renderLesson'])->name('renderLesson');
        Route::get('/reject/course/{id}', [CourseController::class, 'rejectCourse'])->name('rejectCourse');
        Route::get('/accept/course/{id}', [CourseController::class, 'acceptCourse'])->name('acceptCourse');
        Route::get('/userList', [DashboardController::class, 'renderUserList'])->name('renderUserList');
        Route::prefix('landing-page/')->group(function () {
            Route::get('/plans', [LandingPageController::class, 'renderPlans'])->name('renderPlans');
            Route::post('/newPlan', [PlanController::class, 'newPlan'])->name('newPlan');
            Route::post('/newFeature', [PlanController::class, 'newFeature'])->name('newFeature');
            Route::post('/editPlan', [PlanController::class, 'editPlan'])->name('editPlan');
            Route::get('/deletePlan/{id}', [PlanController::class, 'deletePlan'])->name('deletePlan');
            Route::get('/actionPlan/{id}', [PlanController::class, 'actionPlan'])->name('actionPlan');
            Route::get('/courses', [LandingPageController::class, 'renderCourses'])->name('renderCourses');
            Route::get('/courses/showCourses/{id}', [CoursesController::class, 'showToLandingPage'])->name('showCourses');
            Route::get('/courses/unshowCourses/{id}', [CoursesController::class, 'unshowToLandingPage'])->name('unshowCourses');
            Route::get('/mentors', [LandingPageController::class, 'renderMentors'])->name('renderMentors');
            Route::get('/mentors/showMentors/{id}', [MentorController::class, 'showToLandingPage'])->name('showMentors');
            Route::get('/mentors/unshowMentors/{id}', [MentorController::class, 'unshowToLandingPage'])->name('unshowMentors');
            Route::get('/testimonies', [LandingPageController::class, 'renderTestimonies'])->name('renderTestimonies');
        });
    });
});
