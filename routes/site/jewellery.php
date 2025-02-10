<?php

use App\Http\Site\Jewelleries\JewelleryView\Controllers\JewelleryViewController;

Route::group([
    'middleware' => ['guest'],
    'prefix' => 'site'
], function () {
    /*****************  JEWELLERIES ROUTES **************/
    Route::get('/jewelleries', [JewelleryViewController::class, 'index'])->name('site.jewelleries.index');
    /*****************  BRACELET PROPS ROUTES **************/
//    Route::get('/catalogs', [CatalogController::class, 'index'])->name('site.catalogs.index');
});
