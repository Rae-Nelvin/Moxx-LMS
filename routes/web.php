<?php

use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\User\CheckoutController;
use App\Http\Controllers\User\CourseController;
use App\Http\Controllers\User\CourseReviewController;
use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\User\TransactionController;
use App\Http\Controllers\User\UserAddressController;
use App\Http\Controllers\User\UserCourseController;
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

// Route::get('/', [LandingPageController::class, 'index']);
Route::get('/', function () {
    dd('Index Page');
});

Route::get('/csrf-token', function() {
    return response()->json(['csrf_token' => csrf_token()]);
});

// Route::group(['middleware' => ['isUser']], function () {
    Route::prefix('user/')->name('user.')->group(function () {
        // Routes to control CourseReview by User
        Route::get('/course-reviews', [CourseReviewController::class, 'index']);
        Route::get('/course-review/{id}', [CourseReviewController::class, 'show']);
        Route::post('/course-review', [CourseReviewController::class, 'store']);
        Route::patch('/course-review/{id}', [CourseReviewController::class, 'update']);
        Route::delete('/course-review/{id}', [CourseReviewController::class, 'destroy']);

        // Routes to control UserCourse by User
        Route::get('/user-courses', [UserCourseController::class, 'index']);
        Route::get('/user-course/{id}', [UserCourseController::class, 'show']);
        Route::post('/user-course', [UserCourseController::class, 'store']);
        Route::patch('/user-course/{id}', [UserCourseController::class, 'update']);
        Route::delete('/user-course/{id}', [UserCourseController::class, 'destroy']);

        // Routes to control Transaction by User
        Route::get('/transactions', [TransactionController::class, 'indexUser']);
        Route::get('/transaction/{id}', [TransactionController::class, 'show']);
        Route::post('/transaction', [TransactionController::class, 'store']);

        // Routes to control UserAddress by User
        Route::get('/user-address/{id}', [UserAddressController::class, 'show']);
        Route::post('/user-address', [UserAddressController::class, 'store']);
        Route::patch('/user-address/{id}', [UserAddressController::class, 'update']);
        Route::delete('/user-address/{id}', [UserAddressController::class, 'destroy']);

        // Midtrans Routes
        Route::get('/payment/success', [CheckoutController::class, 'midtransCallback'])->name('paymentSuccess');
        Route::post('/payment/success', [CheckoutController::class, 'midtransCallback']);
    });
// });

Route::fallback(function () {
    return "The Address does not registered";
});

require __DIR__ . '/auth.php';
