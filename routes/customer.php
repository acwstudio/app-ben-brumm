<?php

use App\Http\Auth\Controllers\Customers\CustomerAuthController;

Route::group([
    'prefix' => 'auth-customers'
], function () {
    Route::post('/register', [CustomerAuthController::class, 'register']);
    Route::post('/login', [CustomerAuthController::class, 'login']);
    Route::post('/logout', [CustomerAuthController::class, 'logout'])->middleware('auth:customer');
    Route::patch('/refresh', [CustomerAuthController::class, 'refresh'])->middleware('auth:customer');
    Route::get('/profile', [CustomerAuthController::class, 'profile'])->middleware('auth:customer');
});
