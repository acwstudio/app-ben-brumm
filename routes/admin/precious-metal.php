<?php

use App\Http\Admin\PreciousMetals\PrcsMetal\Controllers\PrcsMetalController;
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
});
