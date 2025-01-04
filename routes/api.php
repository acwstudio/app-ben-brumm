<?php

use App\Http\Auth\Controllers\Users\UserAuthController;
use App\Http\Auth\Controllers\Users\UserForgotPasswordController;
use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => 'auth-users'
], function () {
    /*****************  AUTH USERS ROUTES **************/
    Route::post('/register', [UserAuthController::class, 'register']);
    Route::post('/login', [UserAuthController::class, 'login']);
    Route::post('/logout', [UserAuthController::class, 'logout'])->middleware('auth:api');
    Route::patch('/refresh', [UserAuthController::class, 'refresh'])->middleware('auth:api');
    Route::get('/profile', [UserAuthController::class, 'profile'])->middleware('auth:api');

    Route::post('/password-forgot', [UserForgotPasswordController::class, 'forgot']);
    Route::view('/password/email', 'auth.reset_password')->name('password.reset');
    Route::post('/password-reset', [UserForgotPasswordController::class, 'reset']);
});

