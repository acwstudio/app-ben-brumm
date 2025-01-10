<?php

use App\Http\Admin\JewelleryProperties\NecklaceProps\Controllers\NecklacePropController;
use App\Http\Admin\JewelleryProperties\NecklaceProps\Controllers\NecklacePropsNecklaceSizesRelatedController;
use App\Http\Admin\JewelleryProperties\NecklaceProps\Controllers\NecklacePropsNecklaceSizesRelationshipsController;
use App\Http\Admin\JewelleryProperties\NecklacePropSizes\Controllers\NecklacePropSizeController;
use App\Http\Admin\JewelleryProperties\NecklacePropSizes\Controllers\NecklacePropSizesNecklacePropRelatedController;
use App\Http\Admin\JewelleryProperties\NecklacePropSizes\Controllers\NecklacePropSizesNecklacePropRelationshipsController;
use App\Http\Admin\JewelleryProperties\NecklacePropSizes\Controllers\NecklacePropSizesNecklaceSizeRelatedController;
use App\Http\Admin\JewelleryProperties\NecklacePropSizes\Controllers\NecklacePropSizesNecklaceSizeRelationshipsController;
use App\Http\Admin\JewelleryProperties\NecklaceSizes\Controllers\NecklaceSizeController;
use App\Http\Admin\JewelleryProperties\NecklaceSizes\Controllers\NecklaceSizeNecklacePropSizesRelatedController;
use App\Http\Admin\JewelleryProperties\NecklaceSizes\Controllers\NecklaceSizeNecklacePropSizesRelationshipsController;
use App\Http\Admin\JewelleryProperties\NecklaceSizes\Controllers\NecklaceSizesNecklacePropsRelatedController;
use App\Http\Admin\JewelleryProperties\NecklaceSizes\Controllers\NecklaceSizesNecklacePropsRelationshipsController;
use App\Http\Admin\JewelleryProperties\RingProps\Controllers\RingPropController;
use App\Http\Admin\JewelleryProperties\RingProps\Controllers\RingPropJewelleryRelatedController;
use App\Http\Admin\JewelleryProperties\RingProps\Controllers\RingPropJewelleryRelationshipsController;
use App\Http\Admin\JewelleryProperties\RingProps\Controllers\RingPropRingPropSizesRelatedController;
use App\Http\Admin\JewelleryProperties\RingProps\Controllers\RingPropRingPropSizesRelationshipsController;
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

Route::group([
//    'middleware' => 'auth:employee',
    'prefix' => 'admin'
], function () {
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
    //  many-to-one Necklace Prop Sizes to Necklace Prop
    Route::get('necklace-prop-sizes/{id}/relationships/necklace-prop', [NecklacePropSizesNecklacePropRelationshipsController::class, 'index'])
        ->name('necklace-prop-sizes.relationships.necklace-prop');
    Route::patch('necklace-prop-sizes/{id}/relationships/necklace-prop', [NecklacePropSizesNecklacePropRelationshipsController::class, 'update'])
        ->name('necklace-prop-sizes.relationships.necklace-prop');
    Route::get('necklace-prop-sizes/{id}/necklace-prop', [NecklacePropSizesNecklacePropRelatedController::class, 'index'])
        ->name('necklace-prop-sizes.necklace-prop');

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
    //  one-to-one Ring Prop to Jewellery
    Route::get('ring-props/{id}/relationships/jewellery', [RingPropJewelleryRelationshipsController::class, 'index'])
        ->name('ring-prop.relationships.jewellery');
    Route::patch('ring-props/{id}/relationships/jewellery', [RingPropJewelleryRelationshipsController::class, 'update'])
        ->name('ring-prop.relationships.jewellery');
    Route::get('ring-props/{id}/jewellery', [RingPropJewelleryRelatedController::class, 'index'])
        ->name('ring-prop.jewellery');
    //  one-to-many Ring Props to Ring Sizes
    Route::get('ring-props/{id}/relationships/ring-prop-sizes', [RingPropRingPropSizesRelationshipsController::class, 'index'])
        ->name('ring-prop.relationships.ring-prop-sizes');
    Route::patch('ring-props/{id}/relationships/ring-prop-sizes', [RingPropRingPropSizesRelationshipsController::class, 'update'])
        ->name('ring-prop.relationships.ring-prop-sizes');
    Route::get('ring-props/{id}/ring-prop-sizes', [RingPropRingPropSizesRelatedController::class, 'index'])
        ->name('ring-prop.ring-prop-sizes');

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
});
