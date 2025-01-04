<?php

use App\Http\Admin\Jewelleries\Jewellery\Controllers\JewelleriesJewelleryCategoryRelatedController;
use App\Http\Admin\Jewelleries\Jewellery\Controllers\JewelleriesJewelleryCategoryRelationshipsController;
use App\Http\Admin\Jewelleries\Jewellery\Controllers\JewelleryBraceletPropViewRelatedController;
use App\Http\Admin\Jewelleries\Jewellery\Controllers\JewelleryBraceletPropViewRelationshipsController;
use App\Http\Admin\Jewelleries\Jewellery\Controllers\JewelleryController;
use App\Http\Admin\Jewelleries\JewelleryCategory\Controllers\JewelleryCategoryController;
use App\Http\Admin\PreciousMetals\PrcsMetal\Controllers\PrcsMetalController;
use App\Http\Admin\Users\Controllers\UserController;
use App\Http\Auth\Controllers\Customers\CustomerAuthController;
use App\Http\Auth\Controllers\Customers\CustomerForgotPasswordController;
use App\Http\Controllers\Site\Jewelleries\BraceletPropView\BraceletPropViewController;
use App\Http\Controllers\Site\Jewelleries\BraceletPropView\BraceletPropViewJewelleryRelatedController;
use App\Http\Controllers\Site\Jewelleries\BraceletPropView\BraceletPropViewJewelleryRelationshipsController;

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

Route::group([
    'prefix' => 'admin'
], function () {

    Route::get('/users', [UserController::class, 'index']);
    Route::get('/users/{id}', [UserController::class, 'show']);
    Route::post('/users', [UserController::class, 'store']);
    Route::patch('/users/{id}', [UserController::class, 'update']);
    Route::delete('/users/{id}', [UserController::class, 'destroy']);

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
