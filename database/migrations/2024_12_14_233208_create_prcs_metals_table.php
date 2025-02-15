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
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prcs_metals');
        Schema::dropIfExists('prcs_metal_coverages');
        Schema::dropIfExists('prcs_metal_colours');
        Schema::dropIfExists('prcs_metal_samples');
    }
};
