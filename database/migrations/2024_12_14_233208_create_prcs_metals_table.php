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
        Schema::create('prcs_metal_samples', function (Blueprint $table) {
            $table->id();
            $table->string('value')->unique();
            $table->boolean('is_active');
            $table->timestamps();
        });

        Schema::create('prcs_metals', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->boolean('is_active');
            $table->timestamps();
        });

        Schema::create('prcs_metal_colours', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->boolean('is_active');
            $table->timestamps();
        });

        Schema::create('prcs_metal_coverages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->boolean('is_active');
            $table->timestamps();
        });

        Schema::create('prcs_metal_properties', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('prcs_metal_id');
            $table->unsignedBigInteger('prcs_metal_sample_id');
            $table->unsignedBigInteger('prcs_metal_colour_id');
            $table->unsignedBigInteger('prcs_metal_coverage_id');
            $table->timestamps();

            $table->foreign('prcs_metal_id')->references('id')->on('prcs_metals');
            $table->foreign('prcs_metal_sample_id')->references('id')->on('prcs_metal_samples');
            $table->foreign('prcs_metal_colour_id')->references('id')->on('prcs_metal_colours');
            $table->foreign('prcs_metal_coverage_id')->references('id')->on('prcs_metal_coverages');

            $table->unique([
                'prcs_metal_id', 'prcs_metal_colour_id', 'prcs_metal_coverage_id', 'prcs_metal_sample_id'
            ], 'unique_prcs_metal_properties');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prcs_metal_properties');
        Schema::dropIfExists('prcs_metals');
        Schema::dropIfExists('prcs_metal_coverages');
        Schema::dropIfExists('prcs_metal_colours');
        Schema::dropIfExists('prcs_metal_samples');
    }
};
