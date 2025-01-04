<?php

use App\Http\Admin\PreciousMetals\PrcsMetal\Controllers\PrcsMetalController;

Route::group([
    'prefix' => 'admin'
], function () {
    /*****************  PRECIOUS METALS ROUTES **************/
    // CRUD
    Route::get('/prcs-metals', [PrcsMetalController::class, 'index']);
    Route::get('/prcs-metals/{id}', [PrcsMetalController::class, 'show']);
    Route::post('/prcs-metals', [PrcsMetalController::class, 'store']);
    Route::patch('/prcs-metals/{id}', [PrcsMetalController::class, 'update']);
    Route::delete('/prcs-metals/{id}', [PrcsMetalController::class, 'destroy']);
});
