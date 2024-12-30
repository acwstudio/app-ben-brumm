<?php

use App\Http\Controllers\Admin\Jewelleries\Jewellery\JewelleriesJewelleryCategoryRelatedController;
use App\Http\Controllers\Admin\Jewelleries\Jewellery\JewelleriesJewelleryCategoryRelationshipsController;
use App\Http\Controllers\Admin\Jewelleries\Jewellery\JewelleryController;
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
    Route::get('/prcs-metals/{id}', [PrcsMetalController::class, 'show']);
    Route::post('/prcs-metals', [PrcsMetalController::class, 'store']);
    Route::patch('/prcs-metals/{id}', [PrcsMetalController::class, 'update']);
    Route::delete('/prcs-metals/{id}', [PrcsMetalController::class, 'destroy']);

    /*****************  JEWELLERIES ROUTES **************/
    // CRUD
    Route::get('/jewelleries', [JewelleryController::class, 'index']);
    Route::get('/jewelleries/{id}', [JewelleryController::class, 'show']);
    Route::post('/jewelleries', [JewelleryController::class, 'store']);
    Route::patch('/jewelleries/{id}', [JewelleryController::class, 'update']);
    Route::delete('/jewelleries/{id}', [JewelleryController::class, 'destroy']);

    //  many-to-one BlogPosts to  BlogCategory
    Route::get('jewelleries/{id}/relationships/jewellery-category', [JewelleriesJewelleryCategoryRelationshipsController::class, 'index'])
        ->name('jewelleries.relationships.jewellery-category');
    Route::patch('jewelleries/{id}/relationships/jewellery-category', [JewelleriesJewelleryCategoryRelationshipsController::class, 'update'])
        ->name('jewelleries.relationships.jewellery-category');
    Route::get('jewelleries/{id}/jewellery-category', [JewelleriesJewelleryCategoryRelatedController::class, 'index'])
        ->name('jewelleries.jewellery-category');

});
