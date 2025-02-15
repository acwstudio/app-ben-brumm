<?php

use App\Http\Admin\PreciousMetals\PrcsMetal\Controllers\PrcsMetalController;
use App\Http\Admin\PreciousMetals\PrcsMetal\Controllers\PrscMetalJewelleryViewsRelatedController;
use App\Http\Admin\PreciousMetals\PrcsMetal\Controllers\PrscMetalJewelleryViewsRelationshipsController;
use App\Http\Admin\PreciousMetals\PrcsMetalColour\Controllers\PrcsMetalColourController;
use App\Http\Admin\PreciousMetals\PrcsMetalColour\Controllers\PrscMetalColourJewelleryViewsRelatedController;
use App\Http\Admin\PreciousMetals\PrcsMetalColour\Controllers\PrscMetalColourJewelleryViewsRelationshipsController;
use App\Http\Admin\PreciousMetals\PrcsMetalCoverage\Controllers\PrcsMetalCoverageController;
use App\Http\Admin\PreciousMetals\PrcsMetalCoverage\Controllers\PrscMetalCoveragesJewelleryViewsRelatedController;
use App\Http\Admin\PreciousMetals\PrcsMetalCoverage\Controllers\PrscMetalCoveragesJewelleryViewsRelationshipsController;
use App\Http\Admin\PreciousMetals\PrcsMetalSample\Controllers\PrcsMetalSampleController;
use App\Http\Admin\PreciousMetals\PrcsMetalSample\Controllers\PrscMetalSampleJewelleryViewsRelatedController;
use App\Http\Admin\PreciousMetals\PrcsMetalSample\Controllers\PrscMetalSampleJewelleryViewsRelationshipsController;

Route::group([
    'prefix' => 'admin'
], function () {
    /*****************  PRECIOUS METALS ROUTES **************/
    // CRUD
    Route::get('/prcs-metals', [PrcsMetalController::class, 'index']);
    Route::get('/prcs-metals/{id}', [PrcsMetalController::class, 'show']);
    Route::post('/prcs-metals', [PrcsMetalController::class, 'store']);
    Route::patch('/prcs-metals/{id}', [PrcsMetalController::class, 'update']);
    Route::delete('/prcs-metals/{id}', [PrcsMetalController::class, 'destroy']);
    //  one-to-many Precious Metal to Jewellery Views
    Route::get('prcs-metals/{id}/relationships/jewellery-views', [PrscMetalJewelleryViewsRelationshipsController::class, 'index'])
        ->name('prcs-metal.relationships.jewellery-views');
    Route::get('prcs-metals/{id}/jewellery-views', [PrscMetalJewelleryViewsRelatedController::class, 'index'])
        ->name('prcs-metal.jewellery-views');

    /*****************  PRECIOUS METAL SAMPLES ROUTES **************/
    // CRUD
    Route::get('/prcs-metal-samples', [PrcsMetalSampleController::class, 'index']);
    Route::get('/prcs-metal-samples/{id}', [PrcsMetalSampleController::class, 'show']);
    Route::post('/prcs-metal-samples', [PrcsMetalSampleController::class, 'store']);
    Route::patch('/prcs-metal-samples/{id}', [PrcsMetalSampleController::class, 'update']);
    Route::delete('/prcs-metal-samples/{id}', [PrcsMetalSampleController::class, 'destroy']);
    //  one-to-many Precious Metal Sample to Jewellery Views
    Route::get('prcs-metal-samples/{id}/relationships/jewellery-views', [PrscMetalSampleJewelleryViewsRelationshipsController::class, 'index'])
        ->name('prcs-metal-sample.relationships.jewellery-views');
    Route::get('prcs-metal-samples/{id}/jewellery-views', [PrscMetalSampleJewelleryViewsRelatedController::class, 'index'])
        ->name('prcs-metal-sample.jewellery-views');

    /*****************  PRECIOUS METAL COLOURS ROUTES **************/
    // CRUD
    Route::get('/prcs-metal-colours', [PrcsMetalColourController::class, 'index']);
    Route::get('/prcs-metal-colours/{id}', [PrcsMetalColourController::class, 'show']);
    Route::post('/prcs-metal-colours', [PrcsMetalColourController::class, 'store']);
    Route::patch('/prcs-metal-colours/{id}', [PrcsMetalColourController::class, 'update']);
    Route::delete('/prcs-metal-colours/{id}', [PrcsMetalColourController::class, 'destroy']);
    //  one-to-many Precious Metal Colour to Jewellery Views
    Route::get('prcs-metal-colours/{id}/relationships/jewellery-views', [PrscMetalColourJewelleryViewsRelationshipsController::class, 'index'])
        ->name('prcs-metal-colour.relationships.jewellery-views');
    Route::get('prcs-metal-colours/{id}/jewellery-views', [PrscMetalColourJewelleryViewsRelatedController::class, 'index'])
        ->name('prcs-metal-colour.jewellery-views');

    /*****************  PRECIOUS METAL COVERAGES ROUTES **************/
    // CRUD
    Route::get('/prcs-metal-coverages', [PrcsMetalCoverageController::class, 'index']);
    Route::get('/prcs-metal-coverages/{id}', [PrcsMetalCoverageController::class, 'show']);
    Route::post('/prcs-metal-coverages', [PrcsMetalCoverageController::class, 'store']);
    Route::patch('/prcs-metal-coverages/{id}', [PrcsMetalCoverageController::class, 'update']);
    Route::delete('/prcs-metal-coverages/{id}', [PrcsMetalCoverageController::class, 'destroy']);
    //  many-to-many Precious Metal Coverages to Jewellery Views
    Route::get('prcs-metal-coverages/{id}/relationships/jewellery-views', [PrscMetalCoveragesJewelleryViewsRelationshipsController::class, 'index'])
        ->name('prcs-metal-coverages.relationships.jewellery-views');
    Route::get('prcs-metal-coverages/{id}/jewellery-views', [PrscMetalCoveragesJewelleryViewsRelatedController::class, 'index'])
        ->name('prcs-metal-coverages.jewellery-views');
});
