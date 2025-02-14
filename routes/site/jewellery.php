<?php

use App\Http\Site\Jewelleries\BraceletPropView\Controllers\BraceletPropViewController;
use App\Http\Site\Jewelleries\JewelleryView\Controllers\JewelleryViewController;
use App\Http\Site\Jewelleries\JewelleryView\Controllers\JewelleryViewsPrscMetalSampleRelatedController;
use App\Http\Site\Jewelleries\JewelleryView\Controllers\JewelleryViewsPrscMetalSampleRelationshipsController;

Route::group([
    'middleware' => ['guest'],
    'prefix' => 'site'
], function () {
    /*****************  JEWELLERIES ROUTES **************/
    Route::get('/jewellery-views', [JewelleryViewController::class, 'index'])->name('site.jewellery-views.index');
    Route::get('/jewellery-views/{id}', [JewelleryViewController::class, 'show'])->name('site.jewellery-views.show');
    //  many-to-one Jewellery View to Precious Metal Sample
    Route::get('jewellery-views/{id}/relationships/prcs-metal-sample', [JewelleryViewsPrscMetalSampleRelationshipsController::class, 'index'])
        ->name('jewellery-views.relationships.prcs-metal-sample');
    Route::get('jewellery-views/{id}/prcs-metal-sample', [JewelleryViewsPrscMetalSampleRelatedController::class, 'index'])
        ->name('jewellery-views.prcs-metal-sample');

    /*****************  BRACELET PROPS ROUTES **************/
    Route::get('/bracelet-prop-views', [BraceletPropViewController::class, 'index'])->name('site.bracelet-prop-views.index');
    Route::get('/bracelet-prop-views/{id}', [BraceletPropViewController::class, 'show'])->name('site.bracelet-prop-views.show');
});
