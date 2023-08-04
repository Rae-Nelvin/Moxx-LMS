<?php

use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\CoursePhotoController;
use App\Http\Controllers\Admin\CourseTypeController;
use App\Http\Controllers\Admin\MaterialController;
use App\Http\Controllers\Admin\MaterialGroupController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\User\TransactionController;
use App\Http\Controllers\User\UserAddressController;
use Illuminate\Support\Facades\Route;

// Route::group(['middleware' => ['isAdmin']], function () {
    Route::prefix('admin/')->name('admin.')->group(function () {
        // Routes to control Users by Admin
        Route::get('/users', [UserController::class, 'index']);
        Route::get('/user/{id}', [UserController::class, 'show']);
        Route::post('/user', [UserController::class, 'store']);
        Route::patch('/user/{id}', [UserController::class, 'update']);
        Route::delete('/user/{id}', [UserController::class, 'destroy']);

        // Routes to control Roles by Admin
        Route::get('/roles', [RoleController::class, 'index']);
        Route::get('/role/{id}', [RoleController::class, 'show']);
        Route::post('/role', [RoleController::class, 'store']);
        Route::patch('/role/{id}', [RoleController::class, 'update']);
        Route::delete('/role/{id}', [RoleController::class, 'destroy']);

        // Routes to control Course by Admin
        Route::get('/courses', [CourseController::class, 'index']);
        Route::get('/course/{id}', [CourseController::class, 'show']);
        Route::post('/course', [CourseController::class, 'store']);
        Route::patch('/course/{id}', [CourseController::class, 'update']);
        Route::delete('/course/{id}', [CourseController::class, 'destroy']);

        // Routes to control CourseType by Admin
        Route::get('/course-types', [CourseTypeController::class, 'index']);
        Route::get('/course-type/{id}', [CourseTypeController::class, 'show']);
        Route::post('/course-type', [CourseTypeController::class, 'store']);
        Route::patch('/course-type/{id}', [CourseTypeController::class, 'update']);
        Route::delete('/course-type/{id}', [CourseTypeController::class, 'destroy']);
        
        // Routes to control MaterialGroup by Admin
        Route::get('/material-groups', [MaterialGroupController::class, 'index']);
        Route::get('/material-group/{id}', [MaterialGroupController::class, 'show']);
        Route::post('/material-group', [MaterialGroupController::class, 'store']);
        Route::patch('/material-group/{id}', [MaterialGroupController::class, 'update']);
        Route::delete('/material-group/{id}', [MaterialGroupController::class, 'destroy']);

        // Routes to control Material by Admin
        Route::get('/materials', [MaterialController::class, 'index']);
        Route::get('/material/{id}', [MaterialController::class, 'show']);
        Route::post('/material', [MaterialController::class, 'store']);
        Route::patch('/material/{id}', [MaterialController::class, 'update']);
        Route::delete('/material/{id}', [MaterialController::class, 'destroy']);

        // Routes to control CoursePhoto by Admin
        Route::get('/course-photos', [CoursePhotoController::class, 'index']);
        Route::get('/course-photo/{id}', [CoursePhotoController::class, 'show']);
        Route::post('/course-photo', [CoursePhotoController::class, 'store']);
        Route::patch('/course-photo/{id}', [CoursePhotoController::class, 'update']);
        Route::delete('/course-photo/{id}', [CoursePhotoController::class, 'destroy']);

        // Routes to control Transaction by Admin
        Route::get('/transactions', [TransactionController::class, 'indexAdmin']);
        Route::get('/transaction/{id}', [TransactionController::class, 'show']);
        Route::patch('/transaction/{id}', [TransactionController::class, 'update']);
        Route::delete('/transaction/{id}', [TransactionController::class, 'destroy']);

        // Route to control UserAddress by Admin
        Route::get('/user-addresses', [UserAddressController::class, 'index']);
    });
// });
