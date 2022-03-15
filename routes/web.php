<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;

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
    return view('welcome');
})->name('welcome');

// Route::get('/users/register', function () {
//     return view('users.register');
// })->name('users.register');

Route::get('/users/register', [RegisterController::class, 'index'])->name('register');
Route::post('/users/register', [RegisterController::class, 'store'])->name('register');

Route::get('/users/success', function () {
    return view('users.success');
})->name('users.success');

Route::get('/users/login', function () {
    return view('users.login');
})->name('login');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';