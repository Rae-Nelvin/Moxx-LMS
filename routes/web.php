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
    return view('welcome');
});
Route::get('index', function () {
    return view('index');
});
Route::get('users/success', function () {
    return view('users.success');
});

// Route::get('users.loginn', [LoginUserController::class, 'index'])->name('loginn');
// Route::get('login', [LoginUserController::class, 'index'])->name('login');
// Route::post('login', [LoginUserController::class, 'index'])->name('login');
// Route::get('users.registerr', [RegisterController::class, 'create'])->name('registerr');
// Route::post('users.registerr', [RegisterController::class, 'store'])->name('register');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';