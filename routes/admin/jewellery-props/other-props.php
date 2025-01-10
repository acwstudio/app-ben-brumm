<?php

use App\Http\Admin\JewelleryProperties\Clasps\Controllers\ClaspController;
use App\Http\Admin\JewelleryProperties\Clasps\Controllers\ClaspEarringPropsRelatedController;
use App\Http\Admin\JewelleryProperties\Clasps\Controllers\ClaspEarringPropsRelationshipsController;
use App\Http\Admin\JewelleryProperties\EarringProps\Controllers\EarringPropController;
use App\Http\Admin\JewelleryProperties\EarringProps\Controllers\EarringPropsClaspRelatedController;
use App\Http\Admin\JewelleryProperties\EarringProps\Controllers\EarringPropsClaspRelationshipsController;
use App\Http\Admin\JewelleryProperties\Weavings\Controllers\WeavingBraceletPropWeavingsRelatedController;
use App\Http\Admin\JewelleryProperties\Weavings\Controllers\WeavingBraceletPropWeavingsRelationshipsController;
use App\Http\Admin\JewelleryProperties\Weavings\Controllers\WeavingChainPropWeavingsRelatedController;
use App\Http\Admin\JewelleryProperties\Weavings\Controllers\WeavingChainPropWeavingsRelationshipsController;
use App\Http\Admin\JewelleryProperties\Weavings\Controllers\WeavingController;
use App\Http\Admin\JewelleryProperties\Weavings\Controllers\WeavingsBraceletPropsRelatedController;
use App\Http\Admin\JewelleryProperties\Weavings\Controllers\WeavingsBraceletPropsRelationshipsController;
use App\Http\Admin\JewelleryProperties\Weavings\Controllers\WeavingsChainPropsRelatedController;
use App\Http\Admin\JewelleryProperties\Weavings\Controllers\WeavingsChainPropsRelationshipsController;

Route::group([
//    'middleware' => 'auth:employee',
    'prefix' => 'admin'
], function () {
    /*****************  CLASPS ROUTES **************/
    // CRUD
    Route::get('/clasps', [ClaspController::class, 'index']);
    Route::get('/clasps/{id}', [ClaspController::class, 'show']);
    Route::post('/clasps', [ClaspController::class, 'store']);
    Route::patch('/clasps/{id}', [ClaspController::class, 'update']);
    Route::delete('/clasps/{id}', [ClaspController::class, 'destroy']);
    //  one-to-many Clasp to Earring Props
    Route::get('clasps/{id}/relationships/earring-props', [ClaspEarringPropsRelationshipsController::class, 'index'])
        ->name('clasp.relationships.earring-props');
    Route::patch('clasps/{id}/relationships/earring-props', [ClaspEarringPropsRelationshipsController::class, 'update'])
        ->name('clasp.relationships.earring-props');
    Route::get('clasps/{id}/earring-props', [ClaspEarringPropsRelatedController::class, 'index'])
        ->name('clasp.earring-props');

    /*****************  EARRING PROPS ROUTES **************/
    // CRUD
    Route::get('/earring-props', [EarringPropController::class, 'index']);
    Route::get('/earring-props/{id}', [EarringPropController::class, 'show']);
    Route::post('/earring-props', [EarringPropController::class, 'store']);
    Route::patch('/earring-props/{id}', [EarringPropController::class, 'update']);
    Route::delete('/earring-props/{id}', [EarringPropController::class, 'destroy']);
    //  one-to-many Earring Props to Clasp
    Route::get('earring-props/{id}/relationships/clasp', [EarringPropsClaspRelationshipsController::class, 'index'])
        ->name('earring-props.relationships.clasp');
    Route::patch('earring-props/{id}/relationships/clasp', [EarringPropsClaspRelationshipsController::class, 'update'])
        ->name('earring-props.relationships.clasp');
    Route::get('earring-props/{id}/clasp', [EarringPropsClaspRelatedController::class, 'index'])
        ->name('earring-props.clasp');

    /*****************  WEAVINGS ROUTES **************/
    // CRUD
    Route::get('/weavings', [WeavingController::class, 'index'])->name('admin.weavings.index');
    Route::get('/weavings/{id}', [WeavingController::class, 'show'])->name('admin.weavings.show');
    Route::post('/weavings', [WeavingController::class, 'store'])->name('admin.weavings.store');
    Route::patch('/weavings/{id}', [WeavingController::class, 'update'])->name('admin.weavings.update');
    Route::delete('/weavings/{id}', [WeavingController::class, 'destroy'])->name('admin.weavings.destroy');
    //  one-to-many Weaving to Bracelet Prop Weavings
    Route::get('weavings/{id}/relationships/bracelet-prop-weavings', [WeavingBraceletPropWeavingsRelationshipsController::class, 'index'])
        ->name('weaving.relationships.bracelet-prop-weavings');
    Route::patch('weavings/{id}/relationships/bracelet-prop-weavings', [WeavingBraceletPropWeavingsRelationshipsController::class, 'update'])
        ->name('weaving.relationships.bracelet-prop-weavings');
    Route::get('weavings/{id}/bracelet-prop-weavings', [WeavingBraceletPropWeavingsRelatedController::class, 'index'])
        ->name('weaving.bracelet-prop-weavings');
    //  many-to-many Weaving to Bracelet Props
    Route::get('weavings/{id}/relationships/bracelet-props', [WeavingsBraceletPropsRelationshipsController::class, 'index'])
        ->name('weavings.relationships.bracelet-props');
    Route::patch('weavings/{id}/relationships/bracelet-props', [WeavingsBraceletPropsRelationshipsController::class, 'update'])
        ->name('weavings.relationships.bracelet-props');
    Route::get('weavings/{id}/bracelet-props', [WeavingsBraceletPropsRelatedController::class, 'index'])
        ->name('weavings.bracelet-props');
    //  one-to-many Weaving to Chain Prop Weavings
    Route::get('weavings/{id}/relationships/chain-prop-weavings', [WeavingChainPropWeavingsRelationshipsController::class, 'index'])
        ->name('weaving.relationships.chain-prop-weavings');
    Route::patch('weavings/{id}/relationships/chain-prop-weavings', [WeavingChainPropWeavingsRelationshipsController::class, 'update'])
        ->name('weaving.relationships.chain-prop-weavings');
    Route::get('weavings/{id}/chain-prop-weavings', [WeavingChainPropWeavingsRelatedController::class, 'index'])
        ->name('weaving.chain-prop-weavings');
    //  many-to-many Weaving to Chain Props
    Route::get('weavings/{id}/relationships/chain-props', [WeavingsChainPropsRelationshipsController::class, 'index'])
        ->name('weavings.relationships.chain-props');
    Route::patch('weavings/{id}/relationships/chain-props', [WeavingsChainPropsRelationshipsController::class, 'update'])
        ->name('weavings.relationships.chain-props');
    Route::get('weavings/{id}/chain-props', [WeavingsChainPropsRelatedController::class, 'index'])
        ->name('weavings.chain-props');
});
