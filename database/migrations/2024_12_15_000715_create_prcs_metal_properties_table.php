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
        Schema::create('prcs_metal_properties', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('prcs_metal_id');
            $table->unsignedBigInteger('sample_id');
            $table->unsignedBigInteger('prcs_metal_colour_id');
            $table->unsignedBigInteger('prcs_coverage_id');
            $table->timestamps();

            $table->foreign('prcs_metal_id')->references('id')->on('prcs_metals');
            $table->foreign('sample_id')->references('id')->on('samples');
            $table->foreign('prcs_metal_colour_id')->references('id')->on('prcs_metal_colours');
            $table->foreign('prcs_coverage_id')->references('id')->on('prcs_coverages');

            $table->unique([
                'prcs_metal_id', 'prcs_metal_colour_id', 'prcs_coverage_id', 'sample_id'
            ], 'unique_prcs_metal_properties');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prcs_metal_properties');
    }
};
