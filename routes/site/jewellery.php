<?php

use App\Http\Site\Jewelleries\BraceletPropView\Controllers\BraceletPropViewController;
use App\Http\Site\Jewelleries\JewelleryView\Controllers\JewelleryViewController;

Route::group([
    'middleware' => ['guest'],
    'prefix' => 'site'
], function () {
    /*****************  JEWELLERIES ROUTES **************/
    Route::get('/jewellery-views', [JewelleryViewController::class, 'index'])->name('site.jewellery-views.index');
    Route::get('/jewellery-views/{id}', [JewelleryViewController::class, 'show'])->name('site.jewellery-views.show');
    /*****************  BRACELET PROPS ROUTES **************/
    Route::get('/bracelet-prop-views', [BraceletPropViewController::class, 'index'])->name('site.bracelet-prop-views.index');
    Route::get('/bracelet-prop-views/{id}', [BraceletPropViewController::class, 'show'])->name('site.bracelet-prop-views.show');
});
