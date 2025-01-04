<?php

use App\Http\Admin\Inserts\Insert\Controllers\InsertController;
use App\Http\Admin\Inserts\Insert\Controllers\InsertsInsertColourRelatedController;
use App\Http\Admin\Inserts\Insert\Controllers\InsertsInsertColourRelationshipsController;
use App\Http\Admin\Inserts\InsertColour\Controllers\InsertColourController;
use App\Http\Admin\Inserts\InsertColour\Controllers\InsertColourInsertsRelatedController;
use App\Http\Admin\Inserts\InsertColour\Controllers\InsertColourInsertsRelationshipsController;
use App\Http\Admin\Inserts\StoneType\Controllers\StoneTypeController;
use App\Http\Admin\Inserts\StoneType\Controllers\StoneTypeStonesRelatedController;
use App\Http\Admin\Inserts\StoneType\Controllers\StoneTypeStonesRelationshipsController;
use App\Http\Admin\Inserts\Stone\Controllers\StoneController;
use App\Http\Admin\Inserts\Stone\Controllers\StonesStoneTypeRelatedController;
use App\Http\Admin\Inserts\Stone\Controllers\StonesStoneTypeRelationshipsController;

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
    //  many-to-one Inserts to Stone
//    Route::get('inserts/{id}/relationships/stone', [InsertsStoneRelationshipsController::class, 'index'])
//        ->name('inserts.relationships.stone');
//    Route::patch('inserts/{id}/relationships/stone', [InsertsStoneRelationshipsController::class, 'update'])
//        ->name('inserts.relationships.stone');
//    Route::get('inserts/{id}/stone', [InsertsStoneRelatedController::class, 'index'])
//        ->name('inserts.stone');
    //  many-to-one Inserts to Insert Colour
    Route::get('inserts/{id}/relationships/insert-colour', [InsertsInsertColourRelationshipsController::class, 'index'])
        ->name('inserts.relationships.insert-colour');
    Route::patch('inserts/{id}/relationships/insert-colour', [InsertsInsertColourRelationshipsController::class, 'update'])
        ->name('inserts.relationships.insert-colour');
    Route::get('inserts/{id}/insert-colour', [InsertsInsertColourRelatedController::class, 'index'])
        ->name('inserts.insert-colour');
    //  many-to-one Inserts to Insert Shape
//    Route::get('inserts/{id}/relationships/insert-shape', [InsertsInsertShapeRelationshipsController::class, 'index'])
//        ->name('inserts.relationships.insert-shape');
//    Route::patch('inserts/{id}/relationships/insert-shape', [InsertsInsertShapeRelationshipsController::class, 'update'])
//        ->name('inserts.relationships.insert-shape');
//    Route::get('inserts/{id}/insert-shape', [InsertsInsertShapeRelatedController::class, 'index'])
//        ->name('inserts.insert-shape');
    //  one-to-one Insert to Insert Property
//    Route::get('inserts/{id}/relationships/insert-property', [InsertInsertPropertyRelationshipsController::class, 'index'])
//        ->name('insert.relationships.insert-property');
//    Route::patch('inserts/{id}/relationships/insert-property', [InsertInsertPropertyRelationshipsController::class, 'update'])
//        ->name('insert.relationships.insert-property');
//    Route::get('inserts/{id}/insert-property', [InsertInsertPropertyRelatedController::class, 'index'])
//        ->name('insert.insert-property');

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

    /*****************  INSERT COLOUR ROUTES **************/
    // CRUD
    Route::get('/insert-colours', [InsertColourController::class, 'index']);
    Route::get('/insert-colours/{id}', [InsertColourController::class, 'show']);
    Route::post('/insert-colours', [InsertColourController::class, 'store']);
    Route::patch('/insert-colours/{id}', [InsertColourController::class, 'update']);
    Route::delete('/insert-colours/{id}', [InsertColourController::class, 'destroy']);
    //  one-to-many Insert Colour to Inserts
    Route::get('insert-colours/{id}/relationships/inserts', [InsertColourInsertsRelationshipsController::class, 'index'])
        ->name('insert-colour.relationships.inserts');
    Route::patch('insert-colours/{id}/relationships/inserts', [InsertColourInsertsRelationshipsController::class, 'update'])
        ->name('insert-colour.relationships.inserts');
    Route::get('insert-colours/{id}/inserts', [InsertColourInsertsRelatedController::class, 'index'])
        ->name('insert-colour.inserts');
});
