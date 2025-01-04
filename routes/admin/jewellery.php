<?php

use App\Http\Admin\Jewelleries\Jewellery\Controllers\JewelleriesJewelleryCategoryRelatedController;
use App\Http\Admin\Jewelleries\Jewellery\Controllers\JewelleriesJewelleryCategoryRelationshipsController;
use App\Http\Admin\Jewelleries\Jewellery\Controllers\JewelleryBraceletPropViewRelatedController;
use App\Http\Admin\Jewelleries\Jewellery\Controllers\JewelleryBraceletPropViewRelationshipsController;
use App\Http\Admin\Jewelleries\Jewellery\Controllers\JewelleryController;
use App\Http\Admin\Jewelleries\JewelleryCategory\Controllers\JewelleryCategoryController;
use App\Http\Controllers\Site\Jewelleries\BraceletPropView\BraceletPropViewController;
use App\Http\Controllers\Site\Jewelleries\BraceletPropView\BraceletPropViewJewelleryRelatedController;
use App\Http\Controllers\Site\Jewelleries\BraceletPropView\BraceletPropViewJewelleryRelationshipsController;

Route::group([
    'prefix' => 'admin'
], function () {
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

});
