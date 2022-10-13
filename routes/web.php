<?php

use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\User\CheckoutController;
use App\Http\Controllers\User\CourseController;
use App\Http\Controllers\User\DashboardController;
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
        Route::get('/dashboard', [DashboardController::class, 'render'])->name('dashboard');
        Route::get('/course/detail/{id}', [CourseController::class, 'renderCourseDetail'])->name('courseDetail');
        Route::get('/course', [CourseController::class, 'renderCourse'])->name('renderCourse');
        Route::get('/myCourse', [DashboardController::class, 'renderMyCourse'])->name('myCourse');
        Route::get('/transaction', [DashboardController::class, 'renderTransaction'])->name('transaction');
        Route::get('/setting', [DashboardController::class, 'renderSetting'])->name('setting');
        Route::post('/checkout', [CheckoutController::class, 'store'])->name('checkout');
        // Midtrans Routes
        Route::get('/payment/succes', [CheckoutController::class, 'midtransCallback']);
        Route::post('/payment/success', [CheckoutController::class, 'midtransCallback']);
    });
});

Route::fallback(function () {
    return "The Address does not registered";
});

require __DIR__ . '/auth.php';
