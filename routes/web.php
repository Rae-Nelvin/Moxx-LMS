<?php

use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\PaymentController as AdminPaymentController;
use App\Http\Controllers\Tutor\ClassController as TutorClassController;
use App\Http\Controllers\Tutor\DashboardController as TutorDashboardController;
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
Route::get('index', function () {
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
        Route::get('/payment', [AdminPaymentController::class, 'payment'])->name('payment');
        Route::get('/sites', function () {
            return view('admins.sites');
        })->name('sites');
    });
});

Route::group(['middleware' => ['isTutor']], function () {
    Route::prefix('tutor/')->name('tutor.')->group(function () {
        Route::get('/dashboard', [TutorDashboardController::class, 'render'])->name('dashboard');
        Route::get('/newClass', [TutorClassController::class, 'renderNewClass'])->name('newClass');
        Route::post('/newClass', [TutorClassController::class, 'storeNewClass'])->name('newClass');
        Route::post('/newType', [TutorClassController::class, 'storeNewType'])->name('storeType');
    });
});

Route::group(['middleware' => ['isUser']], function () {
    Route::prefix('user/')->name('user.')->group(function () {
    });
});

Route::fallback(function () {
    return "The Address does not registered";
});

require __DIR__ . '/auth.php';
