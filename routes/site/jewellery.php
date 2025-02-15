<?php

use App\Http\Site\Jewelleries\BraceletPropView\Controllers\BraceletPropViewController;
use App\Http\Site\Jewelleries\InsertView\Controllers\InsertViewController;
use App\Http\Site\Jewelleries\InsertView\Controllers\InsertViewsJewelleryViewRelatedController;
use App\Http\Site\Jewelleries\InsertView\Controllers\InsertViewsJewelleryViewRelationshipsController;
use App\Http\Site\Jewelleries\JewelleryView\Controllers\JewelleryViewController;
use App\Http\Site\Jewelleries\JewelleryView\Controllers\JewelleryViewInsertViewsRelatedController;
use App\Http\Site\Jewelleries\JewelleryView\Controllers\JewelleryViewInsertViewsRelationshipsController;
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
    //  one-to-many Jewellery View to Insert Views
    Route::get('jewellery-views/{id}/relationships/insert-views', [JewelleryViewInsertViewsRelationshipsController::class, 'index'])
        ->name('jewellery-view.relationships.insert-views');
    Route::get('jewellery-views/{id}/insert-views', [JewelleryViewInsertViewsRelatedController::class, 'index'])
        ->name('jewellery-view.insert-views');

    /*****************  BRACELET PROPS ROUTES **************/
    Route::get('/bracelet-prop-views', [BraceletPropViewController::class, 'index'])->name('site.bracelet-prop-views.index');
    Route::get('/bracelet-prop-views/{id}', [BraceletPropViewController::class, 'show'])->name('site.bracelet-prop-views.show');

    /*****************  BRACELET PROPS ROUTES **************/
    Route::get('/insert-views', [InsertViewController::class, 'index'])->name('site.insert-views.index');
    Route::get('/insert-views/{id}', [InsertViewController::class, 'show'])->name('site.insert-views.show');
    //  many-to-one Jewellery Views to Precious Metal Sample
    Route::get('insert-views/{id}/relationships/jewellery-view', [InsertViewsJewelleryViewRelationshipsController::class, 'index'])
        ->name('insert-views.relationships.jewellery-view');
    Route::get('insert-views/{id}/jewellery-view', [InsertViewsJewelleryViewRelatedController::class, 'index'])
        ->name('insert-views.jewellery-view');

});
