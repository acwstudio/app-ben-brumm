<?php

use App\Http\Site\Jewelleries\BraceletPropView\Controllers\BraceletPropViewController;
use App\Http\Site\Jewelleries\JewelleryView\Controllers\JewelleryViewController;
use App\Http\Site\Jewelleries\JewelleryView\Controllers\JewelleryViewsPrcsMetalCoveragesRelatedController;
use App\Http\Site\Jewelleries\JewelleryView\Controllers\JewelleryViewsPrcsMetalCoveragesRelationshipsController;
use App\Http\Site\Jewelleries\JewelleryView\Controllers\JewelleryViewsJewelleryCategoryRelatedController;
use App\Http\Site\Jewelleries\JewelleryView\Controllers\JewelleryViewsJewelleryCategoryRelationshipsController;
use App\Http\Site\Jewelleries\JewelleryView\Controllers\JewelleryViewsPrscMetalColourRelatedController;
use App\Http\Site\Jewelleries\JewelleryView\Controllers\JewelleryViewsPrscMetalColourRelationshipsController;
use App\Http\Site\Jewelleries\JewelleryView\Controllers\JewelleryViewsPrscMetalRelatedController;
use App\Http\Site\Jewelleries\JewelleryView\Controllers\JewelleryViewsPrscMetalRelationshipsController;
use App\Http\Site\Jewelleries\JewelleryView\Controllers\JewelleryViewsPrscMetalSampleRelatedController;
use App\Http\Site\Jewelleries\JewelleryView\Controllers\JewelleryViewsPrscMetalSampleRelationshipsController;

Route::group([
    'middleware' => ['guest'],
    'prefix' => 'site'
], function () {
    /*****************  JEWELLERY VIEWS ROUTES **************/
    Route::get('/jewellery-views', [JewelleryViewController::class, 'index'])->name('site.jewellery-views.index');
    Route::get('/jewellery-views/{id}', [JewelleryViewController::class, 'show'])->name('site.jewellery-views.show');
    //  many-to-one Jewellery Views to Precious Metal Sample
    Route::get('jewellery-views/{id}/relationships/prcs-metal-sample', [JewelleryViewsPrscMetalSampleRelationshipsController::class, 'index'])
        ->name('jewellery-views.relationships.prcs-metal-sample');
    Route::get('jewellery-views/{id}/prcs-metal-sample', [JewelleryViewsPrscMetalSampleRelatedController::class, 'index'])
        ->name('jewellery-views.prcs-metal-sample');
    //  many-to-one Jewellery Views to Precious Metal Colour
    Route::get('jewellery-views/{id}/relationships/prcs-metal-colour', [JewelleryViewsPrscMetalColourRelationshipsController::class, 'index'])
        ->name('jewellery-views.relationships.prcs-metal-colour');
    Route::get('jewellery-views/{id}/prcs-metal-colour', [JewelleryViewsPrscMetalColourRelatedController::class, 'index'])
        ->name('jewellery-views.prcs-metal-colour');
    //  many-to-one Jewellery Views to Precious Metal
    Route::get('jewellery-views/{id}/relationships/prcs-metal', [JewelleryViewsPrscMetalRelationshipsController::class, 'index'])
        ->name('jewellery-views.relationships.prcs-metal');
    Route::get('jewellery-views/{id}/prcs-metal', [JewelleryViewsPrscMetalRelatedController::class, 'index'])
        ->name('jewellery-views.prcs-metal');
    //  many-to-one Jewellery Views to Jewellery Category
    Route::get('jewellery-views/{id}/relationships/jewellery-category', [JewelleryViewsJewelleryCategoryRelationshipsController::class, 'index'])
        ->name('jewellery-views.relationships.jewellery-category');
    Route::get('jewellery-views/{id}/jewellery-category', [JewelleryViewsJewelleryCategoryRelatedController::class, 'index'])
        ->name('jewellery-views.jewellery-category');
    //  many-to-many Jewellery Views to Coverages
    Route::get('jewellery-views/{id}/relationships/prcs-metal-coverages', [JewelleryViewsPrcsMetalCoveragesRelationshipsController::class, 'index'])
        ->name('jewellery-views.relationships.prcs-metal-coverages');
    Route::get('jewellery-views/{id}/prcs-metal-coverages', [JewelleryViewsPrcsMetalCoveragesRelatedController::class, 'index'])
        ->name('jewellery-views.prcs-metal-coverages');

    /*****************  BRACELET PROPS ROUTES **************/
    Route::get('/bracelet-prop-views', [BraceletPropViewController::class, 'index'])->name('site.bracelet-prop-views.index');
    Route::get('/bracelet-prop-views/{id}', [BraceletPropViewController::class, 'show'])->name('site.bracelet-prop-views.show');
});
