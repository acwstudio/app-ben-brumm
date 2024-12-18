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
            $table->unsignedBigInteger('prcs_metal_property_id');
            $table->unsignedBigInteger('jewellery_category_id');
            $table->string('name');
            $table->string('description');
            $table->string('part_number');
            $table->string('approx_weight');
            $table->timestamps();

            $table->foreign('prcs_metal_property_id')->references('id')->on('prcs_metal_properties');
            $table->foreign('jewellery_category_id')->references('id')->on('jewellery_categories');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jewelleries');
        Schema::dropIfExists('jewellery_categories');
    }
};
