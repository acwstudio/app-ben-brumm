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
        {
            Schema::create('jewellery_categories', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('slug');
                $table->timestamps();
            });
        }

        Schema::create('jewelleries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('prcs_metal_sample_id');
            $table->unsignedBigInteger('prcs_metal_colour_id');
            $table->unsignedBigInteger('prcs_metal_id');
            $table->unsignedBigInteger('jewellery_category_id');
            $table->string('name');
            $table->string('description');
            $table->string('part_number');
            $table->string('approx_weight');
            $table->timestamps();

            $table->foreign('prcs_metal_sample_id')->references('id')->on('prcs_metal_samples');
            $table->foreign('prcs_metal_colour_id')->references('id')->on('prcs_metal_colours');
            $table->foreign('prcs_metal_id')->references('id')->on('prcs_metals');
            $table->foreign('jewellery_category_id')->references('id')->on('jewellery_categories');
        });

        Schema::create('coverage_jewellery', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('coverage_id');
            $table->unsignedBigInteger('jewellery_id');
            $table->timestamps();

            $table->foreign('coverage_id')->references('id')->on('coverages');
            $table->foreign('jewellery_id')->references('id')->on('jewelleries');

            $table->unique(['coverage_id', 'jewellery_id'], 'unique_coverage_jewellery');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coverage_jewellery');
        Schema::dropIfExists('jewelleries');
        Schema::dropIfExists('jewellery_categories');
    }
};
