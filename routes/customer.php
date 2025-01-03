<?php

use App\Http\Auth\Controllers\Customers\CustomerAuthController;
use App\Http\Auth\Controllers\Customers\CustomerForgotPasswordController;

Route::group([
    'prefix' => 'auth-customers'
], function () {
    /*****************  AUTH CUSTOMERS ROUTES **************/
    Route::post('/register', [CustomerAuthController::class, 'register']);
    Route::post('/login', [CustomerAuthController::class, 'login']);
    Route::post('/logout', [CustomerAuthController::class, 'logout'])->middleware('auth:customer');
    Route::patch('/refresh', [CustomerAuthController::class, 'refresh'])->middleware('auth:customer');
    Route::get('/profile', [CustomerAuthController::class, 'profile'])->middleware('auth:customer');

    Route::post('/password-forgot', [CustomerForgotPasswordController::class, 'forgot']);
    Route::view('/password/email', 'auth.reset_password')->name('password.reset');
    Route::post('/password-reset', [CustomerForgotPasswordController::class, 'reset']);
});
