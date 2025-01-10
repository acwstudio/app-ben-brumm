<?php

use App\Http\Admin\JewelleryProperties\BraceletProps\Controllers\BraceletPropBraceletPropSizesRelatedController;
use App\Http\Admin\JewelleryProperties\BraceletProps\Controllers\BraceletPropBraceletPropSizesRelationshipsController;
use App\Http\Admin\JewelleryProperties\BraceletProps\Controllers\BraceletPropBraceletPropWeavingsRelatedController;
use App\Http\Admin\JewelleryProperties\BraceletProps\Controllers\BraceletPropBraceletPropWeavingsRelationshipsController;
use App\Http\Admin\JewelleryProperties\BraceletProps\Controllers\BraceletPropController;
use App\Http\Admin\JewelleryProperties\BraceletProps\Controllers\BraceletPropsBraceletSizesRelatedController;
use App\Http\Admin\JewelleryProperties\BraceletProps\Controllers\BraceletPropsBraceletSizesRelationshipsController;
use App\Http\Admin\JewelleryProperties\BraceletProps\Controllers\BraceletPropsWeavingsRelatedController;
use App\Http\Admin\JewelleryProperties\BraceletProps\Controllers\BraceletPropsWeavingsRelationshipsController;
use App\Http\Admin\JewelleryProperties\BraceletPropSizes\Controllers\BraceletPropSizeController;
use App\Http\Admin\JewelleryProperties\BraceletPropSizes\Controllers\BraceletPropSizesBraceletSizeRelatedController;
use App\Http\Admin\JewelleryProperties\BraceletPropSizes\Controllers\BraceletPropSizesBraceletSizeRelationshipsController;
use App\Http\Admin\JewelleryProperties\BraceletPropWeavings\Controllers\BraceletPropWeavingController;
use App\Http\Admin\JewelleryProperties\BraceletPropWeavings\Controllers\BraceletPropWeavingsWeavingRelatedController;
use App\Http\Admin\JewelleryProperties\BraceletPropWeavings\Controllers\BraceletPropWeavingsWeavingRelationshipsController;
use App\Http\Admin\JewelleryProperties\BraceletSizes\Controllers\BraceletSizeBraceletPropSizesRelatedController;
use App\Http\Admin\JewelleryProperties\BraceletSizes\Controllers\BraceletSizeBraceletPropSizesRelationshipsController;
use App\Http\Admin\JewelleryProperties\BraceletSizes\Controllers\BraceletSizeController;
use App\Http\Admin\JewelleryProperties\BraceletSizes\Controllers\BraceletSizesBraceletPropsRelatedController;
use App\Http\Admin\JewelleryProperties\BraceletSizes\Controllers\BraceletSizesBraceletPropsRelationshipsController;
use App\Http\Admin\JewelleryProperties\ChainProps\Controllers\ChainPropController;
use App\Http\Admin\JewelleryProperties\ChainProps\Controllers\ChainPropsChainSizesRelatedController;
use App\Http\Admin\JewelleryProperties\ChainProps\Controllers\ChainPropsChainSizesRelationshipsController;
use App\Http\Admin\JewelleryProperties\ChainProps\Controllers\ChainPropsWeavingsRelatedController;
use App\Http\Admin\JewelleryProperties\ChainProps\Controllers\ChainPropsWeavingsRelationshipsController;
use App\Http\Admin\JewelleryProperties\ChainPropSizes\Controllers\ChainPropSizeController;
use App\Http\Admin\JewelleryProperties\ChainPropSizes\Controllers\ChainPropSizesChainSizeRelatedController;
use App\Http\Admin\JewelleryProperties\ChainPropSizes\Controllers\ChainPropSizesChainSizeRelationshipsController;
use App\Http\Admin\JewelleryProperties\ChainPropWeavings\Controllers\ChainPropWeavingController;
use App\Http\Admin\JewelleryProperties\ChainPropWeavings\Controllers\ChainPropWeavingsWeavingRelatedController;
use App\Http\Admin\JewelleryProperties\ChainPropWeavings\Controllers\ChainPropWeavingsWeavingRelationshipsController;
use App\Http\Admin\JewelleryProperties\ChainSizes\Controllers\ChainSizeChainPropSizesRelatedController;
use App\Http\Admin\JewelleryProperties\ChainSizes\Controllers\ChainSizeChainPropSizesRelationshipsController;
use App\Http\Admin\JewelleryProperties\ChainSizes\Controllers\ChainSizeController;
use App\Http\Admin\JewelleryProperties\ChainSizes\Controllers\ChainSizesChainPropsRelatedController;
use App\Http\Admin\JewelleryProperties\ChainSizes\Controllers\ChainSizesChainPropsRelationshipsController;
use App\Http\Admin\JewelleryProperties\NecklaceProps\Controllers\NecklacePropController;
use App\Http\Admin\JewelleryProperties\NecklaceProps\Controllers\NecklacePropsNecklaceSizesRelatedController;
use App\Http\Admin\JewelleryProperties\NecklaceProps\Controllers\NecklacePropsNecklaceSizesRelationshipsController;
use App\Http\Admin\JewelleryProperties\NecklacePropSizes\Controllers\NecklacePropSizeController;
use App\Http\Admin\JewelleryProperties\NecklacePropSizes\Controllers\NecklacePropSizesNecklaceSizeRelatedController;
use App\Http\Admin\JewelleryProperties\NecklacePropSizes\Controllers\NecklacePropSizesNecklaceSizeRelationshipsController;
use App\Http\Admin\JewelleryProperties\NecklaceSizes\Controllers\NecklaceSizeController;
use App\Http\Admin\JewelleryProperties\NecklaceSizes\Controllers\NecklaceSizeNecklacePropSizesRelatedController;
use App\Http\Admin\JewelleryProperties\NecklaceSizes\Controllers\NecklaceSizeNecklacePropSizesRelationshipsController;
use App\Http\Admin\JewelleryProperties\NecklaceSizes\Controllers\NecklaceSizesNecklacePropsRelatedController;
use App\Http\Admin\JewelleryProperties\NecklaceSizes\Controllers\NecklaceSizesNecklacePropsRelationshipsController;
use App\Http\Admin\JewelleryProperties\RingProps\Controllers\RingPropController;
use App\Http\Admin\JewelleryProperties\RingProps\Controllers\RingPropsRingSizesRelatedController;
use App\Http\Admin\JewelleryProperties\RingProps\Controllers\RingPropsRingSizesRelationshipsController;
use App\Http\Admin\JewelleryProperties\RingPropSizes\Controllers\RingPropSizeController;
use App\Http\Admin\JewelleryProperties\RingPropSizes\Controllers\RingPropSizesRingPropRelatedController;
use App\Http\Admin\JewelleryProperties\RingPropSizes\Controllers\RingPropSizesRingPropRelationshipsController;
use App\Http\Admin\JewelleryProperties\RingPropSizes\Controllers\RingPropSizesRingSizeRelatedController;
use App\Http\Admin\JewelleryProperties\RingPropSizes\Controllers\RingPropSizesRingSizeRelationshipsController;
use App\Http\Admin\JewelleryProperties\RingSizes\Controllers\RingSizeController;
use App\Http\Admin\JewelleryProperties\RingSizes\Controllers\RingSizeRingPropSizesRelatedController;
use App\Http\Admin\JewelleryProperties\RingSizes\Controllers\RingSizeRingPropSizesRelationshipsController;
use App\Http\Admin\JewelleryProperties\RingSizes\Controllers\RingSizesRingPropsRelatedController;
use App\Http\Admin\JewelleryProperties\RingSizes\Controllers\RingSizesRingPropsRelationshipsController;
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

    /*****************  NECKLACE PROP SIZES ROUTES **************/
    // CRUD
    Route::get('/necklace-prop-sizes', [NecklacePropSizeController::class, 'index']);
    Route::get('/necklace-prop-sizes/{id}', [NecklacePropSizeController::class, 'show']);
    Route::post('/necklace-prop-sizes', [NecklacePropSizeController::class, 'store']);
    Route::patch('/necklace-prop-sizes/{id}', [NecklacePropSizeController::class, 'update']);
    Route::delete('/necklace-prop-sizes/{id}', [NecklacePropSizeController::class, 'destroy']);
    //  many-to-one Necklace Prop Sizes to Necklace Size
    Route::get('necklace-prop-sizes/{id}/relationships/necklace-size', [NecklacePropSizesNecklaceSizeRelationshipsController::class, 'index'])
        ->name('necklace-prop-sizes.relationships.necklace-size');
    Route::patch('necklace-prop-sizes/{id}/relationships/necklace-size', [NecklacePropSizesNecklaceSizeRelationshipsController::class, 'update'])
        ->name('necklace-prop-sizes.relationships.necklace-size');
    Route::get('necklace-prop-sizes/{id}/necklace-size', [NecklacePropSizesNecklaceSizeRelatedController::class, 'index'])
        ->name('necklace-prop-sizes.necklace-size');

    /*****************  NECKLACE SIZES ROUTES **************/
    // CRUD
    Route::get('/necklace-sizes', [NecklaceSizeController::class, 'index']);
    Route::get('/necklace-sizes/{id}', [NecklaceSizeController::class, 'show']);
    Route::post('/necklace-sizes', [NecklaceSizeController::class, 'store']);
    Route::patch('/necklace-sizes/{id}', [NecklaceSizeController::class, 'update']);
    Route::delete('/necklace-sizes/{id}', [NecklaceSizeController::class, 'destroy']);
    //  one-to-many Necklace Size to Necklace Prop Sizes
    Route::get('necklace-sizes/{id}/relationships/necklace-prop-sizes', [NecklaceSizeNecklacePropSizesRelationshipsController::class, 'index'])
        ->name('necklace-size.relationships.necklace-prop-sizes');
    Route::patch('necklace-sizes/{id}/relationships/necklace-prop-sizes', [NecklaceSizeNecklacePropSizesRelationshipsController::class, 'update'])
        ->name('necklace-size.relationships.necklace-prop-sizes');
    Route::get('necklace-sizes/{id}/necklace-prop-sizes', [NecklaceSizeNecklacePropSizesRelatedController::class, 'index'])
        ->name('necklace-size.necklace-prop-sizes');
    //  many-to-many Necklaces Sizes to Necklaces Props
    Route::get('necklace-sizes/{id}/relationships/necklace-props', [NecklaceSizesNecklacePropsRelationshipsController::class, 'index'])
        ->name('necklace-sizes.relationships.necklace-props');
    Route::get('necklace-sizes/{id}/necklace-props', [NecklaceSizesNecklacePropsRelatedController::class, 'index'])
        ->name('necklace-sizes.necklace-props');

    /*****************  NECKLACE PROPS ROUTES **************/
    // CRUD
    Route::get('/necklace-props', [NecklacePropController::class, 'index']);
    Route::get('/necklace-props/{id}', [NecklacePropController::class, 'show']);
    Route::post('/necklace-props', [NecklacePropController::class, 'store']);
    Route::patch('/necklace-props/{id}', [NecklacePropController::class, 'update']);
    Route::delete('/necklace-props/{id}', [NecklacePropController::class, 'destroy']);
    //  many-to-many Necklace Props to Necklace Sizes
    Route::get('necklace-props/{id}/relationships/necklace-sizes', [NecklacePropsNecklaceSizesRelationshipsController::class, 'index'])
        ->name('necklace-props.relationships.necklace-sizes');
    Route::patch('necklace-props/{id}/relationships/necklace-sizes', [NecklacePropsNecklaceSizesRelationshipsController::class, 'update'])
        ->name('necklace-props.relationships.necklace-sizes');
    Route::get('necklace-props/{id}/necklace-sizes', [NecklacePropsNecklaceSizesRelatedController::class, 'index'])
        ->name('necklace-props.necklace-sizes');

    /*****************  RING PROP SIZES ROUTES **************/
    // CRUD
    Route::get('/ring-prop-sizes', [RingPropSizeController::class, 'index']);
    Route::get('/ring-prop-sizes/{id}', [RingPropSizeController::class, 'show']);
    Route::post('/ring-prop-sizes', [RingPropSizeController::class, 'store']);
    Route::patch('/ring-prop-sizes/{id}', [RingPropSizeController::class, 'update']);
    Route::delete('/ring-prop-sizes/{id}', [RingPropSizeController::class, 'destroy']);
    //  many-to-one Ring Prop Sizes to Ring Size
    Route::get('ring-prop-sizes/{id}/relationships/ring-size', [RingPropSizesRingSizeRelationshipsController::class, 'index'])
        ->name('ring-prop-sizes.relationships.ring-size');
    Route::patch('ring-prop-sizes/{id}/relationships/ring-size', [RingPropSizesRingSizeRelationshipsController::class, 'update'])
        ->name('ring-prop-sizes.relationships.ring-size');
    Route::get('ring-prop-sizes/{id}/ring-size', [RingPropSizesRingSizeRelatedController::class, 'index'])
        ->name('ring-prop-sizes.ring-size');
    //  many-to-one Ring Prop Sizes to Ring Prop
    Route::get('ring-prop-sizes/{id}/relationships/ring-prop', [RingPropSizesRingPropRelationshipsController::class, 'index'])
        ->name('ring-prop-sizes.relationships.ring-prop');
    Route::patch('ring-prop-sizes/{id}/relationships/ring-prop', [RingPropSizesRingPropRelationshipsController::class, 'update'])
        ->name('ring-prop-sizes.relationships.ring-prop');
    Route::get('ring-prop-sizes/{id}/ring-prop', [RingPropSizesRingPropRelatedController::class, 'index'])
        ->name('ring-prop-sizes.ring-prop');

    /*****************  RING PROPS ROUTES **************/
    // CRUD
    Route::get('/ring-props', [RingPropController::class, 'index']);
    Route::get('/ring-props/{id}', [RingPropController::class, 'show']);
    Route::post('/ring-props', [RingPropController::class, 'store']);
    Route::patch('/ring-props/{id}', [RingPropController::class, 'update']);
    Route::delete('/ring-props/{id}', [RingPropController::class, 'destroy']);
    //  many-to-many Ring Props to Ring Sizes
    Route::get('ring-props/{id}/relationships/ring-sizes', [RingPropsRingSizesRelationshipsController::class, 'index'])
        ->name('ring-props.relationships.ring-sizes');
    Route::patch('ring-props/{id}/relationships/ring-sizes', [RingPropsRingSizesRelationshipsController::class, 'update'])
        ->name('ring-props.relationships.ring-sizes');
    Route::get('ring-props/{id}/ring-sizes', [RingPropsRingSizesRelatedController::class, 'index'])
        ->name('ring-props.ring-sizes');

    /*****************  RING SIZES ROUTES **************/
    // CRUD
    Route::get('/ring-sizes', [RingSizeController::class, 'index']);
    Route::get('/ring-sizes/{id}', [RingSizeController::class, 'show']);
    Route::post('/ring-sizes', [RingSizeController::class, 'store']);
    Route::patch('/ring-sizes/{id}', [RingSizeController::class, 'update']);
    Route::delete('/ring-sizes/{id}', [RingSizeController::class, 'destroy']);
    //  one-to-many Ring Size to Ring Prop Sizes
    Route::get('ring-sizes/{id}/relationships/ring-prop-sizes', [RingSizeRingPropSizesRelationshipsController::class, 'index'])
        ->name('ring-size.relationships.ring-prop-sizes');
    Route::patch('ring-sizes/{id}/relationships/ring-prop-sizes', [RingSizeRingPropSizesRelationshipsController::class, 'update'])
        ->name('ring-size.relationships.ring-prop-sizes');
    Route::get('ring-sizes/{id}/ring-prop-sizes', [RingSizeRingPropSizesRelatedController::class, 'index'])
        ->name('ring-size.ring-prop-sizes');
    //  many-to-many Ring Sizes to Ring Props
    Route::get('ring-sizes/{id}/relationships/ring-props', [RingSizesRingPropsRelationshipsController::class, 'index'])
        ->name('ring-sizes.relationships.ring-props');
    Route::get('ring-sizes/{id}/ring-props', [RingSizesRingPropsRelatedController::class, 'index'])
        ->name('ring-sizes.ring-props');

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
