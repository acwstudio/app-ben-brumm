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
        Schema::create('insert_details', function (Blueprint $table) {
//            $table->id();
            $table->unsignedBigInteger('position_into_group_id');
            $table->unsignedBigInteger('insert_id');
            $table->unsignedBigInteger('stone_id');
            $table->unsignedBigInteger('shape_id');
            $table->unsignedBigInteger('colour_id');
            $table->bigInteger('quantity');
            $table->decimal('carat', 8, 3);
            $table->json('dimension');
            $table->timestamps();

            $table->foreign('position_into_group_id')->references('id')->on('position_into_groups');
            $table->foreign('insert_id')->references('id')->on('inserts');
            $table->foreign('stone_id')->references('id')->on('stones');
            $table->foreign('shape_id')->references('id')->on('shapes');
            $table->foreign('colour_id')->references('id')->on('colours');

            $table->primary(['insert_id', 'stone_id', 'position_into_group_id'], 'primary_position_into_group_insert_stones');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('insert_details');
    }
};
