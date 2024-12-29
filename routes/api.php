<?php

use App\Http\Controllers\Admin\PreciousMetals\PrcsMetal\PrcsMetalController;
use App\Http\Controllers\Auth\Users\AuthUserController;
use App\Http\Controllers\Auth\Users\UserController;
use Illuminate\Support\Facades\Route;

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function () {
    Route::post('/register', [AuthUserController::class, 'register']);
    Route::post('/login', [AuthUserController::class, 'login']);
    Route::post('/logout', [AuthUserController::class, 'logout'])->middleware('auth:api');
    Route::patch('/refresh', [AuthUserController::class, 'refresh'])->middleware('auth:api');
    Route::get('/profile', [AuthUserController::class, 'profile'])->middleware('auth:api');
});

Route::group([
    'middleware' => 'api',
], function () {

    Route::get('/users', [UserController::class, 'index']);
    Route::get('/users/{id}', [UserController::class, 'show']);
    Route::post('/users', [UserController::class, 'store']);
    Route::patch('/users/{id}', [UserController::class, 'update']);
    Route::delete('/users/{id}', [UserController::class, 'destroy']);

    Route::get('/prcs-metals', [PrcsMetalController::class, 'index']);
});
