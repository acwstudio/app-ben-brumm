<?php

use App\Http\Admin\Inserts\Insert\Controllers\InsertController;
use App\Http\Admin\Inserts\Insert\Controllers\InsertInsertPropertyRelatedController;
use App\Http\Admin\Inserts\Insert\Controllers\InsertInsertPropertyRelationshipsController;
use App\Http\Admin\Inserts\Insert\Controllers\InsertsInsertColourRelatedController;
use App\Http\Admin\Inserts\Insert\Controllers\InsertsInsertColourRelationshipsController;
use App\Http\Admin\Inserts\Insert\Controllers\InsertsInsertShapeRelatedController;
use App\Http\Admin\Inserts\Insert\Controllers\InsertsInsertShapeRelationshipsController;
use App\Http\Admin\Inserts\Insert\Controllers\InsertsJewelleryRelatedController;
use App\Http\Admin\Inserts\Insert\Controllers\InsertsJewelleryRelationshipsController;
use App\Http\Admin\Inserts\Insert\Controllers\InsertsStoneRelatedController;
use App\Http\Admin\Inserts\Insert\Controllers\InsertsStoneRelationshipsController;
use App\Http\Admin\Inserts\InsertColour\Controllers\InsertColourController;
use App\Http\Admin\Inserts\InsertColour\Controllers\InsertColourInsertsRelatedController;
use App\Http\Admin\Inserts\InsertColour\Controllers\InsertColourInsertsRelationshipsController;
use App\Http\Admin\Inserts\InsertColour\Controllers\InsertColoursJewelleriesRelatedController;
use App\Http\Admin\Inserts\InsertColour\Controllers\InsertColoursJewelleriesRelationshipsController;
use App\Http\Admin\Inserts\InsertProperty\Controllers\InsertPropertyController;
use App\Http\Admin\Inserts\InsertProperty\Controllers\InsertPropertyInsertRelatedController;
use App\Http\Admin\Inserts\InsertProperty\Controllers\InsertPropertyInsertRelationshipsController;
use App\Http\Admin\Inserts\InsertShape\Controllers\InsertShapeController;
use App\Http\Admin\Inserts\InsertShape\Controllers\InsertShapeInsertsRelatedController;
use App\Http\Admin\Inserts\InsertShape\Controllers\InsertShapeInsertsRelationshipsController;
use App\Http\Admin\Inserts\InsertShape\Controllers\InsertShapesJewelleriesRelatedController;
use App\Http\Admin\Inserts\InsertShape\Controllers\InsertShapesJewelleriesRelationshipsController;
use App\Http\Admin\Inserts\Stone\Controllers\StoneInsertsRelatedController;
use App\Http\Admin\Inserts\Stone\Controllers\StoneInsertsRelationshipsController;
use App\Http\Admin\Inserts\Stone\Controllers\StonesJewelleriesRelatedController;
use App\Http\Admin\Inserts\Stone\Controllers\StonesJewelleriesRelationshipsController;
use App\Http\Admin\Inserts\StoneType\Controllers\StoneTypeController;
use App\Http\Admin\Inserts\StoneType\Controllers\StoneTypeStonesRelatedController;
use App\Http\Admin\Inserts\StoneType\Controllers\StoneTypeStonesRelationshipsController;
use App\Http\Admin\Inserts\Stone\Controllers\StoneController;
use App\Http\Admin\Inserts\Stone\Controllers\StonesStoneTypeRelatedController;
use App\Http\Admin\Inserts\Stone\Controllers\StonesStoneTypeRelationshipsController;

Route::group([
    'middleware' => ['auth:employee'],
    'prefix' => 'admin'
], function () {
    /*****************  INSERTS ROUTES **************/
    // CRUD
    Route::get('/inserts', [InsertController::class, 'index'])->name('admin.inserts.index');
    Route::get('/inserts/{id}', [InsertController::class, 'show'])->name('admin.inserts.show');
    Route::post('/inserts', [InsertController::class, 'store'])->name('admin.inserts.store');
    Route::patch('/inserts/{id}', [InsertController::class, 'update'])->name('admin.inserts.update');
    Route::delete('/inserts/{id}', [InsertController::class, 'destroy'])->name('admin.inserts.destroy');
    //  many-to-one Inserts to Stone
    Route::get('inserts/{id}/relationships/stone', [InsertsStoneRelationshipsController::class, 'index'])
        ->name('inserts.relationships.stone');
    Route::patch('inserts/{id}/relationships/stone', [InsertsStoneRelationshipsController::class, 'update'])
        ->name('inserts.relationships.stone');
    Route::get('inserts/{id}/stone', [InsertsStoneRelatedController::class, 'index'])
        ->name('inserts.stone');
    //  many-to-one Inserts to Insert Colour
    Route::get('inserts/{id}/relationships/insert-colour', [InsertsInsertColourRelationshipsController::class, 'index'])
        ->name('inserts.relationships.insert-colour');
    Route::patch('inserts/{id}/relationships/insert-colour', [InsertsInsertColourRelationshipsController::class, 'update'])
        ->name('inserts.relationships.insert-colour');
    Route::get('inserts/{id}/insert-colour', [InsertsInsertColourRelatedController::class, 'index'])
        ->name('inserts.insert-colour');
    //  many-to-one Inserts to Insert Shape
    Route::get('inserts/{id}/relationships/insert-shape', [InsertsInsertShapeRelationshipsController::class, 'index'])
        ->name('inserts.relationships.insert-shape');
    Route::patch('inserts/{id}/relationships/insert-shape', [InsertsInsertShapeRelationshipsController::class, 'update'])
        ->name('inserts.relationships.insert-shape');
    Route::get('inserts/{id}/insert-shape', [InsertsInsertShapeRelatedController::class, 'index'])
        ->name('inserts.insert-shape');
    //  one-to-one Insert to Insert Property
    Route::get('inserts/{id}/relationships/insert-property', [InsertInsertPropertyRelationshipsController::class, 'index'])
        ->name('insert.relationships.insert-property');
    Route::patch('inserts/{id}/relationships/insert-property', [InsertInsertPropertyRelationshipsController::class, 'update'])
        ->name('insert.relationships.insert-property');
    Route::get('inserts/{id}/insert-property', [InsertInsertPropertyRelatedController::class, 'index'])
        ->name('insert.insert-property');
    //  many-to-one Inserts to Jewellery
    Route::get('inserts/{id}/relationships/jewellery', [InsertsJewelleryRelationshipsController::class, 'index'])
        ->name('inserts.relationships.jewellery');
    Route::patch('inserts/{id}/relationships/jewellery', [InsertsJewelleryRelationshipsController::class, 'update'])
        ->name('inserts.relationships.jewellery');
    Route::get('inserts/{id}/jewellery', [InsertsJewelleryRelatedController::class, 'index'])
        ->name('inserts.jewellery');

    /*****************  STONES ROUTES **************/
    // CRUD
    Route::get('/stones', [StoneController::class, 'index'])->name('admin.stones.index');
    Route::get('/stones/{id}', [StoneController::class, 'show'])->name('admin.stones.show');
    Route::post('/stones', [StoneController::class, 'store'])->name('admin.stones.store');
    Route::patch('/stones/{id}', [StoneController::class, 'update'])->name('admin.stones.update');
    Route::delete('/stones/{id}', [StoneController::class, 'destroy'])->name('admin.stones.destroy');
    //  many-to-one stones to Stone Type
    Route::get('stones/{id}/relationships/stone-type', [StonesStoneTypeRelationshipsController::class, 'index'])
        ->name('stones.relationships.stone-type');
    Route::patch('stones/{id}/relationships/stone-type', [StonesStoneTypeRelationshipsController::class, 'update'])
        ->name('stones.relationships.stone-type');
    Route::get('stones/{id}/stone-type', [StonesStoneTypeRelatedController::class, 'index'])
        ->name('stones.stone-type');
    //  one-to-many stones to Inserts
    Route::get('stones/{id}/relationships/inserts', [StoneInsertsRelationshipsController::class, 'index'])
        ->name('stone.relationships.inserts');
    Route::patch('stones/{id}/relationships/inserts', [StoneInsertsRelationshipsController::class, 'update'])
        ->name('stone.relationships.inserts');
    Route::get('stones/{id}/inserts', [StoneInsertsRelatedController::class, 'index'])
        ->name('stone.inserts');
    //  many-to-many Stones to Jewelleries
    Route::get('stones/{id}/relationships/jewelleries', [StonesJewelleriesRelationshipsController::class, 'index'])
        ->name('stones.relationships.jewelleries');
    Route::patch('stones/{id}/relationships/jewelleries', [StonesJewelleriesRelationshipsController::class, 'update'])
        ->name('stones.relationships.jewelleries');
    Route::get('stones/{id}/jewelleries', [StonesJewelleriesRelatedController::class, 'index'])
        ->name('stones.jewelleries');

    /*****************  STONE TYPES ROUTES **************/
    // CRUD
    Route::get('/stone-types', [StoneTypeController::class, 'index'])->name('admin.stone-types.index');
    Route::get('/stone-types/{id}', [StoneTypeController::class, 'show'])->name('admin.stone-types.show');
    Route::post('/stone-types', [StoneTypeController::class, 'store'])->name('admin.stone-types.store');
    Route::patch('/stone-types/{id}', [StoneTypeController::class, 'update'])->name('admin.stone-types.update');
    Route::delete('/stone-types/{id}', [StoneTypeController::class, 'destroy'])->name('admin.stone-types.destroy');
    //  one-to-many Stone Type to Stones
    Route::get('stone-types/{id}/relationships/stones', [StoneTypeStonesRelationshipsController::class, 'index'])
        ->name('stone-type.relationships.stones');
    Route::patch('stone-types/{id}/relationships/stones', [StoneTypeStonesRelationshipsController::class, 'update'])
        ->name('stone-type.relationships.stones');
    Route::get('stone-types/{id}/stones', [StoneTypeStonesRelatedController::class, 'index'])
        ->name('stone-type.stones');

    /*****************  INSERT COLOURS ROUTES **************/
    // CRUD
    Route::get('/insert-colours', [InsertColourController::class, 'index'])->name('admin.insert-colours.index');
    Route::get('/insert-colours/{id}', [InsertColourController::class, 'show'])->name('admin.insert-colours.show');
    Route::post('/insert-colours', [InsertColourController::class, 'store'])->name('admin.insert-colours.store');
    Route::patch('/insert-colours/{id}', [InsertColourController::class, 'update'])->name('admin.insert-colours.update');
    Route::delete('/insert-colours/{id}', [InsertColourController::class, 'destroy'])->name('admin.insert-colours.destroy');
    //  one-to-many Insert Colour to Inserts
    Route::get('insert-colours/{id}/relationships/inserts', [InsertColourInsertsRelationshipsController::class, 'index'])
        ->name('insert-colour.relationships.inserts');
    Route::patch('insert-colours/{id}/relationships/inserts', [InsertColourInsertsRelationshipsController::class, 'update'])
        ->name('insert-colour.relationships.inserts');
    Route::get('insert-colours/{id}/inserts', [InsertColourInsertsRelatedController::class, 'index'])
        ->name('insert-colour.inserts');
    //  many-to-many Insert Colours to Jewelleries
    Route::get('insert-colours/{id}/relationships/jewelleries', [InsertColoursJewelleriesRelationshipsController::class, 'index'])
        ->name('insert-colours.relationships.jewelleries');
    Route::get('insert-colours/{id}/jewelleries', [InsertColoursJewelleriesRelatedController::class, 'index'])
        ->name('insert-colours.jewelleries');

    /*****************  INSERT SHAPES ROUTES **************/
    // CRUD
    Route::get('/insert-shapes', [InsertShapeController::class, 'index'])->name('admin.insert-shapes.index');
    Route::get('/insert-shapes/{id}', [InsertShapeController::class, 'show'])->name('admin.insert-shapes.show');
    Route::post('/insert-shapes', [InsertShapeController::class, 'store'])->name('admin.insert-shapes.store');
    Route::patch('/insert-shapes/{id}', [InsertShapeController::class, 'update'])->name('admin.insert-shapes.update');
    Route::delete('/insert-shapes/{id}', [InsertShapeController::class, 'destroy'])->name('admin.insert-shapes.destroy');
    //  one-to-many Insert Shape to Inserts
    Route::get('insert-shapes/{id}/relationships/inserts', [InsertShapeInsertsRelationshipsController::class, 'index'])
        ->name('insert-shape.relationships.inserts');
    Route::patch('insert-shapes/{id}/relationships/inserts', [InsertShapeInsertsRelationshipsController::class, 'update'])
        ->name('insert-shape.relationships.inserts');
    Route::get('insert-shapes/{id}/inserts', [InsertShapeInsertsRelatedController::class, 'index'])
        ->name('insert-shape.inserts');
    //  many-to-many Insert Shapes to Jewelleries
    Route::get('insert-shapes/{id}/relationships/jewelleries', [InsertShapesJewelleriesRelationshipsController::class, 'index'])
        ->name('insert-shapes.relationships.jewelleries');
    Route::get('insert-shapes/{id}/jewelleries', [InsertShapesJewelleriesRelatedController::class, 'index'])
        ->name('insert-shapes.jewelleries');

    /*****************  INSERT PROPERTIES ROUTES **************/
    // CRUD
    Route::get('/insert-properties', [InsertPropertyController::class, 'index'])->name('admin.insert-properties.index');
    Route::get('/insert-properties/{id}', [InsertPropertyController::class, 'show'])->name('admin.insert-properties.show');
    Route::post('/insert-properties', [InsertPropertyController::class, 'store'])->name('admin.insert-properties.store');
    Route::patch('/insert-properties/{id}', [InsertPropertyController::class, 'update'])->name('admin.insert-properties.update');
    Route::delete('/insert-properties/{id}', [InsertPropertyController::class, 'destroy'])->name('admin.insert-properties.destroy');
    //  one-to-many Insert Shape to Inserts
    Route::get('insert-properties/{id}/relationships/insert', [InsertPropertyInsertRelationshipsController::class, 'index'])
        ->name('insert-property.relationships.insert');
    Route::patch('insert-properties/{id}/relationships/insert', [InsertPropertyInsertRelationshipsController::class, 'update'])
        ->name('insert-property.relationships.insert');
    Route::get('insert-properties/{id}/insert', [InsertPropertyInsertRelatedController::class, 'index'])
        ->name('insert-property.insert');
});
