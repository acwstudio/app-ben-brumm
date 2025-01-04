<?php

use App\Http\Admin\Inserts\Insert\Controllers\InsertController;
use App\Http\Admin\Inserts\InsertStone\Controllers\StoneController;
use App\Http\Admin\Inserts\InsertStone\Controllers\StonesStoneTypeRelatedController;
use App\Http\Admin\Inserts\InsertStone\Controllers\StonesStoneTypeRelationshipsController;
use App\Http\Admin\Inserts\InsertStoneType\Controllers\StoneTypeController;
use App\Http\Admin\Inserts\InsertStoneType\Controllers\StoneTypeStonesRelatedController;
use App\Http\Admin\Inserts\InsertStoneType\Controllers\StoneTypeStonesRelationshipsController;

Route::group([
//    'middleware' => ['auth:employee'],
    'prefix' => 'admin'
], function () {
    /*****************  INSERTS ROUTES **************/
    // CRUD
    Route::get('/inserts', [InsertController::class, 'index']);
    Route::get('/inserts/{id}', [InsertController::class, 'show']);
    Route::post('/inserts', [InsertController::class, 'store']);
    Route::patch('/inserts/{id}', [InsertController::class, 'update']);
    Route::delete('/inserts/{id}', [InsertController::class, 'destroy']);

    /*****************  STONES ROUTES **************/
    // CRUD
    Route::get('/stones', [StoneController::class, 'index']);
    Route::get('/stones/{id}', [StoneController::class, 'show']);
    Route::post('/stones', [StoneController::class, 'store']);
    Route::patch('/stones/{id}', [StoneController::class, 'update']);
    Route::delete('/stones/{id}', [StoneController::class, 'destroy']);
    //  many-to-one stones to Stone Type
    Route::get('stones/{id}/relationships/stone-type', [StonesStoneTypeRelationshipsController::class, 'index'])
        ->name('stones.relationships.stone-type');
    Route::patch('stones/{id}/relationships/stone-type', [StonesStoneTypeRelationshipsController::class, 'update'])
        ->name('stones.relationships.stone-type');
    Route::get('stones/{id}/stone-type', [StonesStoneTypeRelatedController::class, 'index'])
        ->name('stones.stone-type');

    /*****************  STONE TYPES ROUTES **************/
    // CRUD
    Route::get('/stone-types', [StoneTypeController::class, 'index']);
    Route::get('/stone-types/{id}', [StoneTypeController::class, 'show']);
    Route::post('/stone-types', [StoneTypeController::class, 'store']);
    Route::patch('/stone-types/{id}', [StoneTypeController::class, 'update']);
    Route::delete('/stone-types/{id}', [StoneTypeController::class, 'destroy']);
    //  one-to-many Stone Type to Stones
    Route::get('stone-types/{id}/relationships/stones', [StoneTypeStonesRelationshipsController::class, 'index'])
        ->name('stone-type.relationships.stones');
    Route::patch('stone-types/{id}/relationships/stones', [StoneTypeStonesRelationshipsController::class, 'update'])
        ->name('stone-type.relationships.stones');
    Route::get('stone-types/{id}/stones', [StoneTypeStonesRelatedController::class, 'index'])
        ->name('stone-type.stones');
});
