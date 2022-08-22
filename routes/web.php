<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginUserController;
use App\Http\Controllers\RegisterController;



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

Route::get('/dashboard', function () {
    return view('admins.dashboard');
})->name('dashboard');
Route::get('/payment', function () {
    return view('admins.payment');
})->name('payment');
Route::get('/sites', function () {
    return view('admins.sites');
})->name('sites');
Route::get('/myClass', function () {
    return view('tutors.myClass');
})->name('myClass');
Route::get('/classes', function () {
    return view('tutors.classes');
})->name('classes');
Route::get('/newClass', function () {
    return view('tutors.newClass');
})->name('newClass');

require __DIR__ . '/auth.php';
