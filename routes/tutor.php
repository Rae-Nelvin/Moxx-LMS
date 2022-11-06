<?php

use App\Http\Controllers\Tutor\CourseController;
use App\Http\Controllers\Tutor\DashboardController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['isTutor']], function () {
    Route::prefix('/tutor')->name('tutor.')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'render'])->name('dashboard');
        Route::get('/newCourse', [CourseController::class, 'renderNewCourse'])->name('newCourse');
        Route::post('/newCourse', [CourseController::class, 'storeNewCourse']);
        Route::post('/editCourse', [CourseController::class, 'editCourse'])->name('editCourse');
        Route::get('/deleteCourse/{id}', [CourseController::class, 'deleteCourse'])->name('deleteCourse');
        Route::post('/newType', [CourseController::class, 'storeNewType'])->name('storeType');
        Route::post('/newDiscount', [CourseController::class, 'storeNewDiscount'])->name('storeDiscount');
        Route::get('/course/detail/{id}', [CourseController::class, 'courseDetail'])->name('courseDetail');
        Route::get('/course/detail/{courseID}/{sectionID}/{lessonID}', [CourseController::class, 'renderLesson'])->name('renderLesson');
        Route::post('/newSection', [CourseController::class, 'newSection'])->name('newSection');
        Route::post('/newContent', [CourseController::class, 'newContent'])->name('newContent');
    });
});
