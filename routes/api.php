<?php

use App\Http\Controllers\Admin\Jewelleries\Jewellery\JewelleriesJewelleryCategoryRelatedController;
use App\Http\Controllers\Admin\Jewelleries\Jewellery\JewelleriesJewelleryCategoryRelationshipsController;
use App\Http\Controllers\Admin\Jewelleries\Jewellery\JewelleryBraceletPropViewRelatedController;
use App\Http\Controllers\Admin\Jewelleries\Jewellery\JewelleryBraceletPropViewRelationshipsController;
use App\Http\Controllers\Admin\Jewelleries\Jewellery\JewelleryController;
use App\Http\Controllers\Admin\Jewelleries\JewelleryCategory\JewelleryCategoryController;
use App\Http\Controllers\Admin\PreciousMetals\PrcsMetal\PrcsMetalController;
use App\Http\Controllers\Auth\Users\AuthUserController;
use App\Http\Controllers\Auth\Users\UserController;
use App\Http\Controllers\Site\Jewelleries\BraceletPropView\BraceletPropViewController;
use App\Http\Controllers\Site\Jewelleries\BraceletPropView\BraceletPropViewJewelleryRelatedController;
use App\Http\Controllers\Site\Jewelleries\BraceletPropView\BraceletPropViewJewelleryRelationshipsController;
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

    //  many-to-one Jewelleries to Jewellery Category
    Route::get('jewelleries/{id}/relationships/jewellery-category', [JewelleriesJewelleryCategoryRelationshipsController::class, 'index'])
        ->name('jewelleries.relationships.jewellery-category');
    Route::patch('jewelleries/{id}/relationships/jewellery-category', [JewelleriesJewelleryCategoryRelationshipsController::class, 'update'])
        ->name('jewelleries.relationships.jewellery-category');
    Route::get('jewelleries/{id}/jewellery-category', [JewelleriesJewelleryCategoryRelatedController::class, 'index'])
        ->name('jewelleries.jewellery-category');

    //  one-to-one Jewellery to Bracelet Prop View
    Route::get('jewelleries/{id}/relationships/bracelet-prop-view', [JewelleryBraceletPropViewRelationshipsController::class, 'index'])
        ->name('jewellery.relationships.bracelet-prop-view');
    Route::patch('jewelleries/{id}/relationships/bracelet-prop-view', [JewelleryBraceletPropViewRelationshipsController::class, 'update'])
        ->name('jewellery.relationships.bracelet-prop-view');
    Route::get('jewelleries/{id}/bracelet-prop-view', [JewelleryBraceletPropViewRelatedController::class, 'index'])
        ->name('jewellery.bracelet-prop-view');

    /*****************  JEWELLERY CATEGORIES ROUTES **************/
    // CRUD
    Route::get('/jewellery-categories', [JewelleryCategoryController::class, 'index']);
    Route::get('/jewellery-categories/{id}', [JewelleryCategoryController::class, 'show']);
    Route::post('/jewellery-categories', [JewelleryCategoryController::class, 'store']);
    Route::patch('/jewellery-categories/{id}', [JewelleryCategoryController::class, 'update']);
    Route::delete('/jewellery-categories/{id}', [JewelleryCategoryController::class, 'destroy']);

    //  many-to-one Jewellery Category to  Jewelleries
    Route::get('jewellery-categories/{id}/relationships/jewelleries', [JewelleriesJewelleryCategoryRelationshipsController::class, 'index'])
        ->name('jewellery-category.relationships.jewelleries');
    Route::patch('jewellery-categories/{id}/relationships/jewelleries', [JewelleriesJewelleryCategoryRelationshipsController::class, 'update'])
        ->name('jewellery-category.relationships.jewelleries');
    Route::get('jewellery-categories/{id}/jewelleries', [JewelleriesJewelleryCategoryRelatedController::class, 'index'])
        ->name('jewellery-category.jewelleries');

    /*****************  BRACELET PROP VIEW ROUTES **************/
    Route::get('/bracelet-prop-views', [BraceletPropViewController::class, 'index']);

    //  one-to-one Bracelet Prop View to Jewellery
    Route::get('bracelet-prop-views/{id}/relationships/jewelleries', [BraceletPropViewJewelleryRelationshipsController::class, 'index'])
        ->name('bracelet-prop-view.relationships.jewellery');
    Route::patch('bracelet-prop-views/{id}/relationships/jewellery', [BraceletPropViewJewelleryRelationshipsController::class, 'update'])
        ->name('bracelet-prop-view.relationships.jewellery');
    Route::get('bracelet-prop-views/{id}/jewellery', [BraceletPropViewJewelleryRelatedController::class, 'index'])
        ->name('bracelet-prop-view.jewellery');
});
