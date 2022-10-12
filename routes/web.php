<?php

use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\User\ClassController as UserClassController;
use App\Http\Controllers\User\DashboardController as UserDashboardController;
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

Route::get('/', [LandingPageController::class, 'index']);

Route::get('users/success', function () {
    return view('users.success');
});
Route::get('checkout/checkout-success', function () {
    return view('checkout.checkout-success');
});
Route::get('components/navbar', function () {
    return view('components/navbar');
});

Route::group(['middleware' => ['isUser']], function () {
    Route::prefix('user/')->name('user.')->group(function () {
        Route::get('/dashboard', [UserDashboardController::class, 'render'])->name('dashboard');
        Route::get('/course/detail', [UserClassController::class, 'renderCourseDetail'])->name('renderCourseDetail');
        Route::get('/course', [UserClassController::class, 'renderCourse'])->name('renderCourse');
        Route::get('/myCourse', [UserDashboardController::class, 'renderMyCourse'])->name('myCourse');
        Route::get('/transaction', [UserDashboardController::class, 'renderTransaction'])->name('transaction');
        Route::get('/setting', [UserDashboardController::class, 'renderSetting'])->name('setting');
    });
});

Route::fallback(function () {
    return "The Address does not registered";
});

require __DIR__ . '/auth.php';
