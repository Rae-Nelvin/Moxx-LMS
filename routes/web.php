<?php

use App\Http\Controllers\Admin\CourseController as AdminCourseController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Tutor\CourseController as TutorCourseController;
use App\Http\Controllers\Tutor\DashboardController as TutorDashboardController;
use App\Http\Controllers\User\ClassController as UserClassController;
use App\Http\Controllers\User\DashboardController as UserDashboardController;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('users/success', function () {
    return view('users.success');
});
Route::get('checkout/checkout-success', function () {
    return view('checkout.checkout-success');
});
Route::get('components/navbar', function () {
    return view('components/navbar');
});

Route::group(['middleware' => ['isAdmin']], function () {
    Route::prefix('admin/')->name('admin.')->group(function () {
        Route::get('/dashboard', [AdminDashboardController::class, 'render'])->name('dashboard');
        Route::get('/payment', [AdminDashboardController::class, 'renderPayment'])->name('renderPayment');
        Route::get('/sites', function () {
            return view('admins.sites');
        })->name('sites');
        Route::get('/course', [AdminDashboardController::class, 'renderCourse'])->name('renderCourse');
        Route::get('/course/detail/{id}', [AdminCourseController::class, 'courseDetail'])->name('courseDetail');
        Route::get('/course/detail/{courseID}/{sectionID}/{lessonID}', [AdminCourseController::class, 'renderLesson'])->name('renderLesson');
        Route::get('/reject/course/{id}', [AdminCourseController::class, 'rejectCourse'])->name('rejectCourse');
        Route::get('/accept/course/{id}', [AdminCourseController::class, 'acceptCourse'])->name('acceptCourse');
        Route::get('/userList', [AdminDashboardController::class, 'renderUserList'])->name('renderUserList');
    });
});

Route::group(['middleware' => ['isTutor']], function () {
    Route::prefix('tutor/')->name('tutor.')->group(function () {
        Route::get('/dashboard', [TutorDashboardController::class, 'render'])->name('dashboard');
        Route::get('/newClass', [TutorCourseController::class, 'renderNewClass'])->name('newClass');
        Route::post('/newClass', [TutorCourseController::class, 'storeNewClass']);
        Route::post('/newType', [TutorCourseController::class, 'storeNewType'])->name('storeType');
        Route::get('/course/detail/{id}', [TutorCourseController::class, 'courseDetail'])->name('courseDetail');
        Route::get('/course/detail/{courseID}/{sectionID}/{lessonID}', [TutorCourseController::class, 'renderLesson'])->name('renderLesson');
        Route::post('/newSection', [TutorCourseController::class, 'newSection'])->name('newSection');
        Route::post('/newContent', [TutorCourseController::class, 'newContent'])->name('newContent');
    });
});

Route::group(['middleware' => ['isUser']], function () {
    Route::prefix('user/')->name('user.')->group(function () {
        Route::get('/dashboard', [UserDashboardController::class, 'render'])->name('dashboard');
        Route::get('/course/detail', [UserClassController::class, 'renderCourseDetail'])->name('renderCourseDetail');
        Route::get('/course', [UserClassController::class, 'renderCourse'])->name('renderCourse');
    });
});

Route::fallback(function () {
    return "The Address does not registered";
});

require __DIR__ . '/auth.php';
