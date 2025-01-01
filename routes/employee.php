<?php

use App\Http\Auth\Controllers\Employees\EmployeeAuthController;

Route::group([
    'prefix' => 'auth-employees'
], function () {
    Route::post('/register', [EmployeeAuthController::class, 'register']);
    Route::post('/login', [EmployeeAuthController::class, 'login']);
    Route::post('/logout', [EmployeeAuthController::class, 'logout'])->middleware('auth:employee');
    Route::patch('/refresh', [EmployeeAuthController::class, 'refresh'])->middleware('auth:employee');
    Route::get('/profile', [EmployeeAuthController::class, 'profile'])->middleware('auth:employee');
});
