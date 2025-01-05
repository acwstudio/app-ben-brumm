<?php

use App\Http\Admin\JewelleryProperties\BraceletProps\Controllers\BraceletPropController;
use App\Http\Admin\JewelleryProperties\BraceletProps\Controllers\BraceletPropsWeavingRelatedController;
use App\Http\Admin\JewelleryProperties\BraceletProps\Controllers\BraceletPropsWeavingRelationshipsController;
use App\Http\Admin\JewelleryProperties\BraceletPropWeavings\Controllers\BraceletPropWeavingController;
use App\Http\Admin\JewelleryProperties\BraceletPropWeavings\Controllers\BraceletPropWeavingsWeavingRelatedController;
use App\Http\Admin\JewelleryProperties\BraceletPropWeavings\Controllers\BraceletPropWeavingsWeavingRelationshipsController;
use App\Http\Admin\JewelleryProperties\ChainProps\Controllers\ChainPropController;
use App\Http\Admin\JewelleryProperties\ChainProps\Controllers\ChainPropsWeavingRelatedController;
use App\Http\Admin\JewelleryProperties\ChainProps\Controllers\ChainPropsWeavingRelationshipsController;
use App\Http\Admin\JewelleryProperties\ChainPropWeavings\Controllers\ChainPropWeavingController;
use App\Http\Admin\JewelleryProperties\ChainPropWeavings\Controllers\ChainPropWeavingsWeavingRelatedController;
use App\Http\Admin\JewelleryProperties\ChainPropWeavings\Controllers\ChainPropWeavingsWeavingRelationshipsController;
use App\Http\Admin\JewelleryProperties\Weavings\Controllers\WeavingBraceletPropsRelatedController;
use App\Http\Admin\JewelleryProperties\Weavings\Controllers\WeavingBraceletPropsRelationshipsController;
use App\Http\Admin\JewelleryProperties\Weavings\Controllers\WeavingBraceletPropWeavingsRelatedController;
use App\Http\Admin\JewelleryProperties\Weavings\Controllers\WeavingBraceletPropWeavingsRelationshipsController;
use App\Http\Admin\JewelleryProperties\Weavings\Controllers\WeavingChainPropsRelatedController;
use App\Http\Admin\JewelleryProperties\Weavings\Controllers\WeavingChainPropsRelationshipsController;
use App\Http\Admin\JewelleryProperties\Weavings\Controllers\WeavingChainPropWeavingsRelatedController;
use App\Http\Admin\JewelleryProperties\Weavings\Controllers\WeavingChainPropWeavingsRelationshipsController;
use App\Http\Admin\JewelleryProperties\Weavings\Controllers\WeavingController;

Route::group([
//    'middleware' => 'auth:employee',
    'prefix' => 'admin'
], function () {
    /*****************  WEAVINGS ROUTES **************/
    // CRUD
    Route::get('/weavings', [WeavingController::class, 'index']);
    Route::get('/weavings/{id}', [WeavingController::class, 'show']);
    Route::post('/weavings', [WeavingController::class, 'store']);
    Route::patch('/weavings/{id}', [WeavingController::class, 'update']);
    Route::delete('/weavings/{id}', [WeavingController::class, 'destroy']);
    //  one-to-many Weaving to Bracelet Prop Weavings
    Route::get('weavings/{id}/relationships/bracelet-prop-weavings', [WeavingBraceletPropWeavingsRelationshipsController::class, 'index'])
        ->name('weaving.relationships.bracelet-prop-weavings');
    Route::patch('weavings/{id}/relationships/bracelet-prop-weavings', [WeavingBraceletPropWeavingsRelationshipsController::class, 'update'])
        ->name('weaving.relationships.bracelet-prop-weavings');
    Route::get('weavings/{id}/bracelet-prop-weavings', [WeavingBraceletPropWeavingsRelatedController::class, 'index'])
        ->name('weaving.bracelet-prop-weavings');
    //  one-to-many Weaving to Bracelet Props
    Route::get('weavings/{id}/relationships/bracelet-props', [WeavingBraceletPropsRelationshipsController::class, 'index'])
        ->name('weaving.relationships.bracelet-props');
    Route::patch('weavings/{id}/relationships/bracelet-props', [WeavingBraceletPropsRelationshipsController::class, 'update'])
        ->name('weaving.relationships.bracelet-props');
    Route::get('weavings/{id}/bracelet-props', [WeavingBraceletPropsRelatedController::class, 'index'])
        ->name('weaving.bracelet-props');
    //  one-to-many Weaving to Chain Prop Weavings
    Route::get('weavings/{id}/relationships/chain-prop-weavings', [WeavingChainPropWeavingsRelationshipsController::class, 'index'])
        ->name('weaving.relationships.chain-prop-weavings');
    Route::patch('weavings/{id}/relationships/chain-prop-weavings', [WeavingChainPropWeavingsRelationshipsController::class, 'update'])
        ->name('weaving.relationships.chain-prop-weavings');
    Route::get('weavings/{id}/chain-prop-weavings', [WeavingChainPropWeavingsRelatedController::class, 'index'])
        ->name('weaving.chain-prop-weavings');
    //  one-to-many Weaving to Chain Props
    Route::get('weavings/{id}/relationships/chain-props', [WeavingChainPropsRelationshipsController::class, 'index'])
        ->name('weaving.relationships.chain-props');
    Route::patch('weavings/{id}/relationships/chain-props', [WeavingChainPropsRelationshipsController::class, 'update'])
        ->name('weaving.relationships.chain-props');
    Route::get('weavings/{id}/chain-props', [WeavingChainPropsRelatedController::class, 'index'])
        ->name('weaving.chain-props');

    /*****************  BRACELET PROPS ROUTES **************/
    // CRUD
    Route::get('/bracelet-props', [BraceletPropController::class, 'index']);
    Route::get('/bracelet-props/{id}', [BraceletPropController::class, 'show']);
    Route::post('/bracelet-props', [BraceletPropController::class, 'store']);
    Route::patch('/bracelet-props/{id}', [BraceletPropController::class, 'update']);
    Route::delete('/bracelet-props/{id}', [BraceletPropController::class, 'destroy']);
    //  many-to-one Bracelet Props to Weaving
    Route::get('bracelet-props/{id}/relationships/weaving', [BraceletPropsWeavingRelationshipsController::class, 'index'])
        ->name('bracelet-props.relationships.weaving');
    Route::patch('bracelet-props/{id}/relationships/weaving', [BraceletPropsWeavingRelationshipsController::class, 'update'])
        ->name('bracelet-props.relationships.weaving');
    Route::get('bracelet-props/{id}/weaving', [BraceletPropsWeavingRelatedController::class, 'index'])
        ->name('bracelet-props.weaving');

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

    /*****************  CHAIN PROPS ROUTES **************/
    // CRUD
    Route::get('/chain-props', [ChainPropController::class, 'index']);
    Route::get('/chain-props/{id}', [ChainPropController::class, 'show']);
    Route::post('/chain-props', [ChainPropController::class, 'store']);
    Route::patch('/chain-props/{id}', [ChainPropController::class, 'update']);
    Route::delete('/chain-props/{id}', [ChainPropController::class, 'destroy']);
    //  many-to-one Chain Props to Weaving
    Route::get('chain-props/{id}/relationships/weaving', [ChainPropsWeavingRelationshipsController::class, 'index'])
        ->name('chain-props.relationships.weaving');
    Route::patch('chain-props/{id}/relationships/weaving', [ChainPropsWeavingRelationshipsController::class, 'update'])
        ->name('chain-props.relationships.weaving');
    Route::get('chain-props/{id}/weaving', [ChainPropsWeavingRelatedController::class, 'index'])
        ->name('chain-props.weaving');

    /*****************  CHAIN PROP WEAVINGS ROUTES **************/
    // CRUD
    Route::get('/chain-prop-weavings', [ChainPropWeavingController::class, 'index']);
    Route::get('/chain-prop-weavings/{id}', [ChainPropWeavingController::class, 'show']);
    Route::post('/chain-prop-weavings', [ChainPropWeavingController::class, 'store']);
    Route::patch('/chain-prop-weavings/{id}', [ChainPropWeavingController::class, 'update']);
    Route::delete('/chain-prop-weavings/{id}', [ChainPropWeavingController::class, 'destroy']);
    //  many-to-one Bracelet Prop Weavings to Weaving
    Route::get('chain-prop-weavings/{id}/relationships/weaving', [ChainPropWeavingsWeavingRelationshipsController::class, 'index'])
        ->name('chain-prop-weavings.relationships.weaving');
    Route::patch('chain-prop-weavings/{id}/relationships/weaving', [ChainPropWeavingsWeavingRelationshipsController::class, 'update'])
        ->name('chain-prop-weavings.relationships.weaving');
    Route::get('chain-prop-weavings/{id}/weaving', [ChainPropWeavingsWeavingRelatedController::class, 'index'])
        ->name('chain-prop-weavings.weaving');
});
