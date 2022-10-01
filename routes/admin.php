<?php

use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['isAdmin']], function () {
    Route::prefix('admin/')->name('admin.')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'render'])->name('dashboard');
        Route::get('/payment', [DashboardController::class, 'renderPayment'])->name('renderPayment');
        Route::get('/sites', function () {
            return view('admins.sites');
        })->name('sites');
        Route::get('/course', [DashboardController::class, 'renderCourse'])->name('renderCourse');
        Route::get('/course/detail/{id}', [CourseController::class, 'courseDetail'])->name('courseDetail');
        Route::get('/course/detail/{courseID}/{sectionID}/{lessonID}', [CourseController::class, 'renderLesson'])->name('renderLesson');
        Route::get('/reject/course/{id}', [CourseController::class, 'rejectCourse'])->name('rejectCourse');
        Route::get('/accept/course/{id}', [CourseController::class, 'acceptCourse'])->name('acceptCourse');
        Route::get('/userList', [DashboardController::class, 'renderUserList'])->name('renderUserList');
    });
});
