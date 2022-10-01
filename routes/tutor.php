<?php

use App\Http\Controllers\Tutor\CourseController;
use App\Http\Controllers\Tutor\DashboardController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['isTutor']], function () {
    Route::name('tutor.')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'render'])->name('dashboard');
        Route::get('/newClass', [CourseController::class, 'renderNewClass'])->name('newClass');
        Route::post('/newClass', [CourseController::class, 'storeNewClass']);
        Route::post('/newType', [CourseController::class, 'storeNewType'])->name('storeType');
        Route::get('/course/detail/{id}', [CourseController::class, 'courseDetail'])->name('courseDetail');
        Route::get('/course/detail/{courseID}/{sectionID}/{lessonID}', [CourseController::class, 'renderLesson'])->name('renderLesson');
        Route::post('/newSection', [CourseController::class, 'newSection'])->name('newSection');
        Route::post('/newContent', [CourseController::class, 'newContent'])->name('newContent');
    });
});
