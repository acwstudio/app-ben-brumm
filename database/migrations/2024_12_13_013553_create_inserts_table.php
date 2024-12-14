<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('inserts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('stone_id');
            $table->unsignedBigInteger('insert_colour_id');
            $table->unsignedBigInteger('insert_shape_id');
            $table->timestamps();

            $table->foreign('stone_id')->references('id')->on('stones');
            $table->foreign('insert_colour_id')->references('id')->on('insert_colours');
            $table->foreign('insert_shape_id')->references('id')->on('insert_shapes');
            $table->unique(['stone_id', 'insert_colour_id', 'insert_shape_id'], 'unique_stone_colour_shape');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inserts');
    }
};
