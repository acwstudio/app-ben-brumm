<?php

use App\Http\Admin\JewelleryProperties\BraceletProps\Controllers\BraceletPropBraceletPropSizesRelatedController;
use App\Http\Admin\JewelleryProperties\BraceletProps\Controllers\BraceletPropBraceletPropSizesRelationshipsController;
use App\Http\Admin\JewelleryProperties\BraceletProps\Controllers\BraceletPropBraceletPropWeavingsRelatedController;
use App\Http\Admin\JewelleryProperties\BraceletProps\Controllers\BraceletPropBraceletPropWeavingsRelationshipsController;
use App\Http\Admin\JewelleryProperties\BraceletProps\Controllers\BraceletPropController;
use App\Http\Admin\JewelleryProperties\BraceletProps\Controllers\BraceletPropJewelleryRelatedController;
use App\Http\Admin\JewelleryProperties\BraceletProps\Controllers\BraceletPropJewelleryRelationshipsController;
use App\Http\Admin\JewelleryProperties\BraceletProps\Controllers\BraceletPropsBraceletSizesRelatedController;
use App\Http\Admin\JewelleryProperties\BraceletProps\Controllers\BraceletPropsBraceletSizesRelationshipsController;
use App\Http\Admin\JewelleryProperties\BraceletProps\Controllers\BraceletPropsWeavingsRelatedController;
use App\Http\Admin\JewelleryProperties\BraceletProps\Controllers\BraceletPropsWeavingsRelationshipsController;
use App\Http\Admin\JewelleryProperties\BraceletPropSizes\Controllers\BraceletPropSizeController;
use App\Http\Admin\JewelleryProperties\BraceletPropSizes\Controllers\BraceletPropSizesBraceletPropRelatedController;
use App\Http\Admin\JewelleryProperties\BraceletPropSizes\Controllers\BraceletPropSizesBraceletPropRelationshipsController;
use App\Http\Admin\JewelleryProperties\BraceletPropSizes\Controllers\BraceletPropSizesBraceletSizeRelatedController;
use App\Http\Admin\JewelleryProperties\BraceletPropSizes\Controllers\BraceletPropSizesBraceletSizeRelationshipsController;
use App\Http\Admin\JewelleryProperties\BraceletPropWeavings\Controllers\BraceletPropWeavingController;
use App\Http\Admin\JewelleryProperties\BraceletPropWeavings\Controllers\BraceletPropWeavingsBraceletPropRelatedController;
use App\Http\Admin\JewelleryProperties\BraceletPropWeavings\Controllers\BraceletPropWeavingsBraceletPropRelationshipsController;
use App\Http\Admin\JewelleryProperties\BraceletPropWeavings\Controllers\BraceletPropWeavingsWeavingRelatedController;
use App\Http\Admin\JewelleryProperties\BraceletPropWeavings\Controllers\BraceletPropWeavingsWeavingRelationshipsController;
use App\Http\Admin\JewelleryProperties\BraceletSizes\Controllers\BraceletSizeBraceletPropSizesRelatedController;
use App\Http\Admin\JewelleryProperties\BraceletSizes\Controllers\BraceletSizeBraceletPropSizesRelationshipsController;
use App\Http\Admin\JewelleryProperties\BraceletSizes\Controllers\BraceletSizeController;
use App\Http\Admin\JewelleryProperties\BraceletSizes\Controllers\BraceletSizesBraceletPropsRelatedController;
use App\Http\Admin\JewelleryProperties\BraceletSizes\Controllers\BraceletSizesBraceletPropsRelationshipsController;

Route::group([
//    'middleware' => 'auth:employee',
    'prefix' => 'admin'
], function () {
    /*****************  BRACELET PROP WEAVINGS ROUTES **************/
    // CRUD
    Route::get('/bracelet-prop-weavings', [BraceletPropWeavingController::class, 'index']);
    Route::get('/bracelet-prop-weavings/{id}', [BraceletPropWeavingController::class, 'show']);
    Route::post('/bracelet-prop-weavings', [BraceletPropWeavingController::class, 'store']);
    Route::patch('/bracelet-prop-weavings/{id}', [BraceletPropWeavingController::class, 'update']);
    Route::delete('/bracelet-prop-weavings/{id}', [BraceletPropWeavingController::class, 'destroy']);
    //  many-to-one Bracelet Prop Weavings to Weaving
    Route::get('bracelet-prop-weavings/{id}/relationships/weaving', [BraceletPropWeavingsWeavingRelationshipsController::class, 'index'])
        ->name('bracelet-prop-weavings.relationships.weaving');
    Route::patch('bracelet-prop-weavings/{id}/relationships/weaving', [BraceletPropWeavingsWeavingRelationshipsController::class, 'update'])
        ->name('bracelet-prop-weavings.relationships.weaving');
    Route::get('bracelet-prop-weavings/{id}/weaving', [BraceletPropWeavingsWeavingRelatedController::class, 'index'])
        ->name('bracelet-prop-weavings.weaving');
    //  many-to-one Bracelet Prop Weavings to Bracelet Prop
    Route::get('bracelet-prop-weavings/{id}/relationships/bracelet-prop', [BraceletPropWeavingsBraceletPropRelationshipsController::class, 'index'])
        ->name('bracelet-prop-weavings.relationships.bracelet-prop');
    Route::patch('bracelet-prop-weavings/{id}/relationships/bracelet-prop', [BraceletPropWeavingsBraceletPropRelationshipsController::class, 'update'])
        ->name('bracelet-prop-weavings.relationships.bracelet-prop');
    Route::get('bracelet-prop-weavings/{id}/bracelet-prop', [BraceletPropWeavingsBraceletPropRelatedController::class, 'index'])
        ->name('bracelet-prop-weavings.bracelet-prop');

    /*****************  BRACELET PROP SIZES ROUTES **************/
    // CRUD
    Route::get('/bracelet-prop-sizes', [BraceletPropSizeController::class, 'index']);
    Route::get('/bracelet-prop-sizes/{id}', [BraceletPropSizeController::class, 'show']);
    Route::post('/bracelet-prop-sizes', [BraceletPropSizeController::class, 'store']);
    Route::patch('/bracelet-prop-sizes/{id}', [BraceletPropSizeController::class, 'update']);
    Route::delete('/bracelet-prop-sizes/{id}', [BraceletPropSizeController::class, 'destroy']);
    //  many-to-one Bracelet Prop Sizes to Bracelet Size
    Route::get('bracelet-prop-sizes/{id}/relationships/bracelet-size', [BraceletPropSizesBraceletSizeRelationshipsController::class, 'index'])
        ->name('bracelet-prop-sizes.relationships.bracelet-size');
    Route::patch('bracelet-prop-sizes/{id}/relationships/bracelet-size', [BraceletPropSizesBraceletSizeRelationshipsController::class, 'update'])
        ->name('bracelet-prop-sizes.relationships.bracelet-size');
    Route::get('bracelet-prop-sizes/{id}/bracelet-size', [BraceletPropSizesBraceletSizeRelatedController::class, 'index'])
        ->name('bracelet-prop-sizes.bracelet-size');
    //  many-to-one Bracelet Prop Sizes to Bracelet Prop
    Route::get('bracelet-prop-sizes/{id}/relationships/bracelet-prop', [BraceletPropSizesBraceletPropRelationshipsController::class, 'index'])
        ->name('bracelet-prop-sizes.relationships.bracelet-prop');
    Route::patch('bracelet-prop-sizes/{id}/relationships/bracelet-prop', [BraceletPropSizesBraceletPropRelationshipsController::class, 'update'])
        ->name('bracelet-prop-sizes.relationships.bracelet-prop');
    Route::get('bracelet-prop-sizes/{id}/bracelet-prop', [BraceletPropSizesBraceletPropRelatedController::class, 'index'])
        ->name('bracelet-prop-sizes.bracelet-prop');

    /*****************  BRACELET PROPS ROUTES **************/
    // CRUD
    Route::get('/bracelet-props', [BraceletPropController::class, 'index']);
    Route::get('/bracelet-props/{id}', [BraceletPropController::class, 'show']);
    Route::post('/bracelet-props', [BraceletPropController::class, 'store']);
    Route::patch('/bracelet-props/{id}', [BraceletPropController::class, 'update']);
    Route::delete('/bracelet-props/{id}', [BraceletPropController::class, 'destroy']);
    //  many-to-many Bracelet Props to Weavings
    Route::get('bracelet-props/{id}/relationships/weavings', [BraceletPropsWeavingsRelationshipsController::class, 'index'])
        ->name('bracelet-props.relationships.weavings');
    Route::get('bracelet-props/{id}/weavings', [BraceletPropsWeavingsRelatedController::class, 'index'])
        ->name('bracelet-props.weavings');
    //  many-to-many Bracelet Props to Bracelet Sizes
    Route::get('bracelet-props/{id}/relationships/bracelet-sizes', [BraceletPropsBraceletSizesRelationshipsController::class, 'index'])
        ->name('bracelet-props.relationships.bracelet-sizes');
    Route::get('bracelet-props/{id}/bracelet-sizes', [BraceletPropsBraceletSizesRelatedController::class, 'index'])
        ->name('bracelet-props.bracelet-sizes');
    //  one-to-many Bracelet Prop to Bracelet Prop Sizes
    Route::get('bracelet-props/{id}/relationships/bracelet-prop-sizes', [BraceletPropBraceletPropSizesRelationshipsController::class, 'index'])
        ->name('bracelet-prop.relationships.bracelet-prop-sizes');
    Route::patch('bracelet-props/{id}/relationships/bracelet-prop-sizes', [BraceletPropBraceletPropSizesRelationshipsController::class, 'update'])
        ->name('bracelet-prop.relationships.bracelet-prop-sizes');
    Route::get('bracelet-props/{id}/bracelet-prop-sizes', [BraceletPropBraceletPropSizesRelatedController::class, 'index'])
        ->name('bracelet-prop.bracelet-prop-sizes');
    //  one-to-many Bracelet Prop to Bracelet Prop Weavings
    Route::get('bracelet-props/{id}/relationships/bracelet-prop-weavings', [BraceletPropBraceletPropWeavingsRelationshipsController::class, 'index'])
        ->name('bracelet-prop.relationships.bracelet-prop-weavings');
    Route::patch('bracelet-props/{id}/relationships/bracelet-prop-weavings', [BraceletPropBraceletPropWeavingsRelationshipsController::class, 'update'])
        ->name('bracelet-prop.relationships.bracelet-prop-weavings');
    Route::get('bracelet-props/{id}/bracelet-prop-weavings', [BraceletPropBraceletPropWeavingsRelatedController::class, 'index'])
        ->name('bracelet-prop.bracelet-prop-weavings');
    //  one-to-one Bracelet Prop to Jewellery
    Route::get('bracelet-props/{id}/relationships/jewellery', [BraceletPropJewelleryRelationshipsController::class, 'index'])
        ->name('bracelet-prop.relationships.jewellery');
    Route::patch('bracelet-props/{id}/relationships/jewellery', [BraceletPropJewelleryRelationshipsController::class, 'update'])
        ->name('bracelet-prop.relationships.jewellery');
    Route::get('bracelet-props/{id}/jewellery', [BraceletPropJewelleryRelatedController::class, 'index'])
        ->name('bracelet-prop.jewellery');

    /*****************  BRACELET SIZES ROUTES **************/
    // CRUD
    Route::get('/bracelet-sizes', [BraceletSizeController::class, 'index']);
    Route::get('/bracelet-sizes/{id}', [BraceletSizeController::class, 'show']);
    Route::post('/bracelet-sizes', [BraceletSizeController::class, 'store']);
    Route::patch('/bracelet-sizes/{id}', [BraceletSizeController::class, 'update']);
    Route::delete('/bracelet-sizes/{id}', [BraceletSizeController::class, 'destroy']);
    //  one-to-many Bracelet Size to Bracelet Prop Sizes
    Route::get('bracelet-sizes/{id}/relationships/bracelet-prop-sizes', [BraceletSizeBraceletPropSizesRelationshipsController::class, 'index'])
        ->name('bracelet-size.relationships.bracelet-prop-sizes');
    Route::patch('bracelet-sizes/{id}/relationships/bracelet-prop-sizes', [BraceletSizeBraceletPropSizesRelationshipsController::class, 'update'])
        ->name('bracelet-size.relationships.bracelet-prop-sizes');
    Route::get('bracelet-sizes/{id}/bracelet-prop-sizes', [BraceletSizeBraceletPropSizesRelatedController::class, 'index'])
        ->name('bracelet-size.bracelet-prop-sizes');
    //  many-to-many Bracelet Sizes to Bracelet Props
    Route::get('bracelet-sizes/{id}/relationships/bracelet-props', [BraceletSizesBraceletPropsRelationshipsController::class, 'index'])
        ->name('bracelet-sizes.relationships.bracelet-props');
    Route::get('bracelet-sizes/{id}/bracelet-props', [BraceletSizesBraceletPropsRelatedController::class, 'index'])
        ->name('bracelet-sizes.bracelet-props');

});
