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
        Schema::create('stone_types', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('description');
            $table->string('slug');
            $table->boolean('is_active');
            $table->timestamps();
        });

        Schema::create('stones', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('stone_type_id');
            $table->string('name')->unique();
            $table->string('description');
            $table->string('slug');
            $table->boolean('is_natural');
            $table->boolean('is_active');
            $table->timestamps();

            $table->foreign('stone_type_id')->references('id')->on('stone_types');
        });

        Schema::create('insert_shapes', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('description');
            $table->string('slug');
            $table->boolean('is_active');
            $table->timestamps();
        });

        Schema::create('insert_colours', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('description');
            $table->string('slug');
            $table->boolean('is_active');
            $table->timestamps();
        });

        Schema::create('insert_properties', function (Blueprint $table) {
            $table->id();
            $table->integer('quantity');
            $table->decimal('weight', 8, 3);
            $table->string('weight_unit');
            $table->json('dimensions');
            $table->timestamps();
        });

        Schema::create('inserts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('jewellery_id');
            $table->unsignedBigInteger('stone_id');
            $table->unsignedBigInteger('insert_colour_id');
            $table->unsignedBigInteger('insert_shape_id');
            $table->unsignedBigInteger('insert_property_id');
            $table->timestamps();

            $table->foreign('stone_id')->references('id')->on('stones');
            $table->foreign('insert_colour_id')->references('id')->on('insert_colours');
            $table->foreign('insert_shape_id')->references('id')->on('insert_shapes');
            $table->foreign('insert_property_id')->references('id')->on('insert_properties');
//            $table->foreign('jewellery_id')->references('id')->on('jewelleries');

            $table->unique([
                'stone_id', 'insert_colour_id', 'insert_shape_id', 'jewellery_id', 'insert_property_id'
            ], 'unique_inserts');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inserts');
        Schema::dropIfExists('stones');
        Schema::dropIfExists('insert_shapes');
        Schema::dropIfExists('stone_types');
        Schema::dropIfExists('insert_properties');
        Schema::dropIfExists('insert_colours');
    }
};
