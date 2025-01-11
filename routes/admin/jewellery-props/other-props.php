<?php

use App\Http\Admin\JewelleryProperties\BroochProps\Controllers\BroochPropController;
use App\Http\Admin\JewelleryProperties\BroochProps\Controllers\BroochPropJewelleryRelatedController;
use App\Http\Admin\JewelleryProperties\BroochProps\Controllers\BroochPropJewelleryRelationshipsController;
use App\Http\Admin\JewelleryProperties\Clasps\Controllers\ClaspController;
use App\Http\Admin\JewelleryProperties\Clasps\Controllers\ClaspEarringPropsRelatedController;
use App\Http\Admin\JewelleryProperties\Clasps\Controllers\ClaspEarringPropsRelationshipsController;
use App\Http\Admin\JewelleryProperties\CufflinkProps\Controllers\CuffLinkPropController;
use App\Http\Admin\JewelleryProperties\CufflinkProps\Controllers\CuffLinkPropJewelleryRelatedController;
use App\Http\Admin\JewelleryProperties\CufflinkProps\Controllers\CuffLinkPropJewelleryRelationshipsController;
use App\Http\Admin\JewelleryProperties\EarringProps\Controllers\EarringPropController;
use App\Http\Admin\JewelleryProperties\EarringProps\Controllers\EarringPropsClaspRelatedController;
use App\Http\Admin\JewelleryProperties\EarringProps\Controllers\EarringPropsClaspRelationshipsController;
use App\Http\Admin\JewelleryProperties\PendantProps\Controllers\PendantPropController;
use App\Http\Admin\JewelleryProperties\PendantProps\Controllers\PendantPropJewelleryRelatedController;
use App\Http\Admin\JewelleryProperties\PendantProps\Controllers\PendantPropJewelleryRelationshipsController;
use App\Http\Admin\JewelleryProperties\TieClipProps\Controllers\TieClipPropController;
use App\Http\Admin\JewelleryProperties\TieClipProps\Controllers\TieClipPropJewelleryRelatedController;
use App\Http\Admin\JewelleryProperties\TieClipProps\Controllers\TieClipPropJewelleryRelationshipsController;
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
    /*****************  BROOCH PROPS ROUTES **************/
    // CRUD
    Route::get('/brooch-props', [BroochPropController::class, 'index']);
    Route::get('/brooch-props/{id}', [BroochPropController::class, 'show']);
    Route::post('/brooch-props', [BroochPropController::class, 'store']);
    Route::patch('/brooch-props/{id}', [BroochPropController::class, 'update']);
    Route::delete('/brooch-props/{id}', [BroochPropController::class, 'destroy']);
    //  one-to-one Brooch Prop to Jewellery
    Route::get('brooch-props/{id}/relationships/jewellery', [BroochPropJewelleryRelationshipsController::class, 'index'])
        ->name('brooch-prop.relationships.jewellery');
    Route::patch('brooch-props/{id}/relationships/jewellery', [BroochPropJewelleryRelationshipsController::class, 'update'])
        ->name('brooch-prop.relationships.jewellery');
    Route::get('brooch-props/{id}/jewellery', [BroochPropJewelleryRelatedController::class, 'index'])
        ->name('brooch-prop.jewellery');

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

    /*****************  CUFF LINK PROPS ROUTES **************/
    // CRUD
    Route::get('/cuff-link-props', [CuffLinkPropController::class, 'index']);
    Route::get('/cuff-link-props/{id}', [CuffLinkPropController::class, 'show']);
    Route::post('/cuff-link-props', [CuffLinkPropController::class, 'store']);
    Route::patch('/cuff-link-props/{id}', [CuffLinkPropController::class, 'update']);
    Route::delete('/cuff-link-props/{id}', [CuffLinkPropController::class, 'destroy']);
    //  one-to-one Cufflink to Jewellery
    Route::get('cuff-link-props/{id}/relationships/jewellery', [CuffLinkPropJewelleryRelationshipsController::class, 'index'])
        ->name('cuff-link-prop.relationships.jewellery');
    Route::patch('cuff-link-props/{id}/relationships/jewellery', [CuffLinkPropJewelleryRelationshipsController::class, 'update'])
        ->name('cuff-link-prop.relationships.jewellery');
    Route::get('cuff-link-props/{id}/jewellery', [CuffLinkPropJewelleryRelatedController::class, 'index'])
        ->name('cuff-link-prop.jewellery');

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

    /*****************  PENDANT PROPS ROUTES **************/
    // CRUD
    Route::get('/pendant-props', [PendantPropController::class, 'index']);
    Route::get('/pendant-props/{id}', [PendantPropController::class, 'show']);
    Route::post('/pendant-props', [PendantPropController::class, 'store']);
    Route::patch('/pendant-props/{id}', [PendantPropController::class, 'update']);
    Route::delete('/pendant-props/{id}', [PendantPropController::class, 'destroy']);
    //  one-to-one Brooch Prop to Jewellery
    Route::get('pendant-props/{id}/relationships/jewellery', [PendantPropJewelleryRelationshipsController::class, 'index'])
        ->name('pendant-prop.relationships.jewellery');
    Route::patch('pendant-props/{id}/relationships/jewellery', [PendantPropJewelleryRelationshipsController::class, 'update'])
        ->name('pendant-prop.relationships.jewellery');
    Route::get('pendant-props/{id}/jewellery', [PendantPropJewelleryRelatedController::class, 'index'])
        ->name('pendant-prop.jewellery');

    /*****************  TIE CLIP PROPS ROUTES **************/
    // CRUD
    Route::get('/tie-clip-props', [TieClipPropController::class, 'index']);
    Route::get('/tie-clip-props/{id}', [TieClipPropController::class, 'show']);
    Route::post('/tie-clip-props', [TieClipPropController::class, 'store']);
    Route::patch('/tie-clip-props/{id}', [TieClipPropController::class, 'update']);
    Route::delete('/tie-clip-props/{id}', [TieClipPropController::class, 'destroy']);
    //  one-to-one Tie Clip Prop to Jewellery
    Route::get('tie-clip-props/{id}/relationships/jewellery', [TieClipPropJewelleryRelationshipsController::class, 'index'])
        ->name('tie-clip-prop.relationships.jewellery');
    Route::patch('tie-clip-props/{id}/relationships/jewellery', [TieClipPropJewelleryRelationshipsController::class, 'update'])
        ->name('tie-clip-prop.relationships.jewellery');
    Route::get('tie-clip-props/{id}/jewellery', [TieClipPropJewelleryRelatedController::class, 'index'])
        ->name('tie-clip-prop.jewellery');

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
