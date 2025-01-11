<?php

use App\Http\Admin\JewelleryProperties\ChainProps\Controllers\ChainPropChainPropSizesRelatedController;
use App\Http\Admin\JewelleryProperties\ChainProps\Controllers\ChainPropChainPropSizesRelationshipsController;
use App\Http\Admin\JewelleryProperties\ChainProps\Controllers\ChainPropChainPropWeavingsRelatedController;
use App\Http\Admin\JewelleryProperties\ChainProps\Controllers\ChainPropChainPropWeavingsRelationshipsController;
use App\Http\Admin\JewelleryProperties\ChainProps\Controllers\ChainPropController;
use App\Http\Admin\JewelleryProperties\ChainProps\Controllers\ChainPropJewelleryRelatedController;
use App\Http\Admin\JewelleryProperties\ChainProps\Controllers\ChainPropJewelleryRelationshipsController;
use App\Http\Admin\JewelleryProperties\ChainProps\Controllers\ChainPropsChainSizesRelatedController;
use App\Http\Admin\JewelleryProperties\ChainProps\Controllers\ChainPropsChainSizesRelationshipsController;
use App\Http\Admin\JewelleryProperties\ChainProps\Controllers\ChainPropsWeavingsRelatedController;
use App\Http\Admin\JewelleryProperties\ChainProps\Controllers\ChainPropsWeavingsRelationshipsController;
use App\Http\Admin\JewelleryProperties\ChainPropSizes\Controllers\ChainPropSizeController;
use App\Http\Admin\JewelleryProperties\ChainPropSizes\Controllers\ChainPropSizesChainPropRelatedController;
use App\Http\Admin\JewelleryProperties\ChainPropSizes\Controllers\ChainPropSizesChainPropRelationshipsController;
use App\Http\Admin\JewelleryProperties\ChainPropSizes\Controllers\ChainPropSizesChainSizeRelatedController;
use App\Http\Admin\JewelleryProperties\ChainPropSizes\Controllers\ChainPropSizesChainSizeRelationshipsController;
use App\Http\Admin\JewelleryProperties\ChainPropWeavings\Controllers\ChainPropWeavingController;
use App\Http\Admin\JewelleryProperties\ChainPropWeavings\Controllers\ChainPropWeavingsChainPropRelatedController;
use App\Http\Admin\JewelleryProperties\ChainPropWeavings\Controllers\ChainPropWeavingsChainPropRelationshipsController;
use App\Http\Admin\JewelleryProperties\ChainPropWeavings\Controllers\ChainPropWeavingsWeavingRelatedController;
use App\Http\Admin\JewelleryProperties\ChainPropWeavings\Controllers\ChainPropWeavingsWeavingRelationshipsController;
use App\Http\Admin\JewelleryProperties\ChainSizes\Controllers\ChainSizeChainPropSizesRelatedController;
use App\Http\Admin\JewelleryProperties\ChainSizes\Controllers\ChainSizeChainPropSizesRelationshipsController;
use App\Http\Admin\JewelleryProperties\ChainSizes\Controllers\ChainSizeController;
use App\Http\Admin\JewelleryProperties\ChainSizes\Controllers\ChainSizesChainPropsRelatedController;
use App\Http\Admin\JewelleryProperties\ChainSizes\Controllers\ChainSizesChainPropsRelationshipsController;

Route::group([
//    'middleware' => 'auth:employee',
    'prefix' => 'admin'
], function () {
    /*****************  CHAIN PROP SIZES ROUTES **************/
    // CRUD
    Route::get('/chain-prop-sizes', [ChainPropSizeController::class, 'index']);
    Route::get('/chain-prop-sizes/{id}', [ChainPropSizeController::class, 'show']);
    Route::post('/chain-prop-sizes', [ChainPropSizeController::class, 'store']);
    Route::patch('/chain-prop-sizes/{id}', [ChainPropSizeController::class, 'update']);
    Route::delete('/chain-prop-sizes/{id}', [ChainPropSizeController::class, 'destroy']);
    //  many-to-one Chain Prop Sizes to Chain Size
    Route::get('chain-prop-sizes/{id}/relationships/chain-size', [ChainPropSizesChainSizeRelationshipsController::class, 'index'])
        ->name('chain-prop-sizes.relationships.chain-size');
    Route::patch('chain-prop-sizes/{id}/relationships/chain-size', [ChainPropSizesChainSizeRelationshipsController::class, 'update'])
        ->name('chain-prop-sizes.relationships.chain-size');
    Route::get('chain-prop-sizes/{id}/chain-size', [ChainPropSizesChainSizeRelatedController::class, 'index'])
        ->name('chain-prop-sizes.chain-size');
    //  many-to-one Chain Prop Sizes to Chain Prop
    Route::get('chain-prop-sizes/{id}/relationships/chain-prop', [ChainPropSizesChainPropRelationshipsController::class, 'index'])
        ->name('chain-prop-sizes.relationships.chain-prop');
    Route::patch('chain-prop-sizes/{id}/relationships/chain-prop', [ChainPropSizesChainPropRelationshipsController::class, 'update'])
        ->name('chain-prop-sizes.relationships.chain-prop');
    Route::get('chain-prop-sizes/{id}/chain-prop', [ChainPropSizesChainPropRelatedController::class, 'index'])
        ->name('chain-prop-sizes.chain-prop');

    /*****************  CHAIN PROP WEAVINGS ROUTES **************/
    // CRUD
    Route::get('/chain-prop-weavings', [ChainPropWeavingController::class, 'index']);
    Route::get('/chain-prop-weavings/{id}', [ChainPropWeavingController::class, 'show']);
    Route::post('/chain-prop-weavings', [ChainPropWeavingController::class, 'store']);
    Route::patch('/chain-prop-weavings/{id}', [ChainPropWeavingController::class, 'update']);
    Route::delete('/chain-prop-weavings/{id}', [ChainPropWeavingController::class, 'destroy']);
    //  many-to-one Chain Prop Weavings to Weaving
    Route::get('chain-prop-weavings/{id}/relationships/weaving', [ChainPropWeavingsWeavingRelationshipsController::class, 'index'])
        ->name('chain-prop-weavings.relationships.weaving');
    Route::patch('chain-prop-weavings/{id}/relationships/weaving', [ChainPropWeavingsWeavingRelationshipsController::class, 'update'])
        ->name('chain-prop-weavings.relationships.weaving');
    Route::get('chain-prop-weavings/{id}/weaving', [ChainPropWeavingsWeavingRelatedController::class, 'index'])
        ->name('chain-prop-weavings.weaving');
    //  many-to-one Chain Prop Weavings to Chain Prop
    Route::get('chain-prop-weavings/{id}/relationships/chain-prop', [ChainPropWeavingsChainPropRelationshipsController::class, 'index'])
        ->name('chain-prop-weavings.relationships.chain-prop');
    Route::patch('chain-prop-weavings/{id}/relationships/chain-prop', [ChainPropWeavingsChainPropRelationshipsController::class, 'update'])
        ->name('chain-prop-weavings.relationships.chain-prop');
    Route::get('chain-prop-weavings/{id}/chain-prop', [ChainPropWeavingsChainPropRelatedController::class, 'index'])
        ->name('chain-prop-weavings.chain-prop');

    /*****************  CHAIN PROPS ROUTES **************/
    // CRUD
    Route::get('/chain-props', [ChainPropController::class, 'index']);
    Route::get('/chain-props/{id}', [ChainPropController::class, 'show']);
    Route::post('/chain-props', [ChainPropController::class, 'store']);
    Route::patch('/chain-props/{id}', [ChainPropController::class, 'update']);
    Route::delete('/chain-props/{id}', [ChainPropController::class, 'destroy']);
    //  many-to-many Chain Props to Weavings
    Route::get('chain-props/{id}/relationships/weavings', [ChainPropsWeavingsRelationshipsController::class, 'index'])
        ->name('chain-props.relationships.weavings');
    Route::patch('chain-props/{id}/relationships/weavings', [ChainPropsWeavingsRelationshipsController::class, 'update'])
        ->name('chain-props.relationships.weavings');
    Route::get('chain-props/{id}/weavings', [ChainPropsWeavingsRelatedController::class, 'index'])
        ->name('chain-props.weavings');
    //  many-to-many Chain Props to Chain Sizes
    Route::get('chain-props/{id}/relationships/chain-sizes', [ChainPropsChainSizesRelationshipsController::class, 'index'])
        ->name('chain-props.relationships.chain-sizes');
    Route::patch('chain-props/{id}/relationships/chain-sizes', [ChainPropsChainSizesRelationshipsController::class, 'update'])
        ->name('chain-props.relationships.chain-sizes');
    Route::get('chain-props/{id}/chain-sizes', [ChainPropsChainSizesRelatedController::class, 'index'])
        ->name('chain-props.chain-sizes');
    //  one-to-many Chain Prop to Chain Prop Sizes
    Route::get('chain-props/{id}/relationships/chain-prop-sizes', [ChainPropChainPropSizesRelationshipsController::class, 'index'])
        ->name('chain-prop.relationships.chain-prop-sizes');
    Route::patch('chain-props/{id}/relationships/chain-prop-sizes', [ChainPropChainPropSizesRelationshipsController::class, 'update'])
        ->name('chain-prop.relationships.chain-prop-sizes');
    Route::get('chain-props/{id}/chain-prop-sizes', [ChainPropChainPropSizesRelatedController::class, 'index'])
        ->name('chain-prop.chain-prop-sizes');
    //  one-to-many Chain Prop to Chain Prop Weavings
    Route::get('chain-props/{id}/relationships/chain-prop-weavings', [ChainPropChainPropWeavingsRelationshipsController::class, 'index'])
        ->name('chain-prop.relationships.chain-prop-weavings');
    Route::patch('chain-props/{id}/relationships/chain-prop-weavings', [ChainPropChainPropWeavingsRelationshipsController::class, 'update'])
        ->name('chain-prop.relationships.chain-prop-weavings');
    Route::get('chain-props/{id}/chain-prop-weavings', [ChainPropChainPropWeavingsRelatedController::class, 'index'])
        ->name('chain-prop.chain-prop-weavings');
    //  one-to-many Chain Prop to Jewellery
    Route::get('chain-props/{id}/relationships/jewellery', [ChainPropJewelleryRelationshipsController::class, 'index'])
        ->name('chain-prop.relationships.jewellery');
    Route::patch('chain-props/{id}/relationships/jewellery', [ChainPropJewelleryRelationshipsController::class, 'update'])
        ->name('chain-prop.relationships.jewellery');
    Route::get('chain-props/{id}/jewellery', [ChainPropJewelleryRelatedController::class, 'index'])
        ->name('chain-prop.jewellery');

    /*****************  CHAIN SIZES ROUTES **************/
    // CRUD
    Route::get('/chain-sizes', [ChainSizeController::class, 'index']);
    Route::get('/chain-sizes/{id}', [ChainSizeController::class, 'show']);
    Route::post('/chain-sizes', [ChainSizeController::class, 'store']);
    Route::patch('/chain-sizes/{id}', [ChainSizeController::class, 'update']);
    Route::delete('/chain-sizes/{id}', [ChainSizeController::class, 'destroy']);
    //  one-to-many Chain Size to Chain Prop Sizes
    Route::get('chain-sizes/{id}/relationships/chain-prop-sizes', [ChainSizeChainPropSizesRelationshipsController::class, 'index'])
        ->name('chain-size.relationships.chain-prop-sizes');
    Route::patch('chain-sizes/{id}/relationships/chain-prop-sizes', [ChainSizeChainPropSizesRelationshipsController::class, 'update'])
        ->name('chain-size.relationships.chain-prop-sizes');
    Route::get('chain-sizes/{id}/chain-prop-sizes', [ChainSizeChainPropSizesRelatedController::class, 'index'])
        ->name('chain-size.chain-prop-sizes');
    //  many-to-many Chain Sizes to Chain Props
    Route::get('chain-sizes/{id}/relationships/chain-props', [ChainSizesChainPropsRelationshipsController::class, 'index'])
        ->name('chain-sizes.relationships.chain-props');
    Route::get('chain-sizes/{id}/chain-props', [ChainSizesChainPropsRelatedController::class, 'index'])
        ->name('chain-sizes.chain-props');
});
