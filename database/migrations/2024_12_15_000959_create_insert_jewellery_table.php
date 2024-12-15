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
        Schema::create('insert_jewellery', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('insert_id');
            $table->unsignedBigInteger('jewellery_id');
            $table->unsignedBigInteger('insert_property_id');
            $table->timestamps();

            $table->foreign('insert_id')->references('id')->on('inserts');
            $table->foreign('jewellery_id')->references('id')->on('jewelleries');
            $table->foreign('insert_property_id')->references('id')->on('insert_properties');
            $table->unique(['insert_id', 'jewellery_id', 'insert_property_id'], 'unique_insert_jewellery_property');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('insert_jewellery');
    }
};
