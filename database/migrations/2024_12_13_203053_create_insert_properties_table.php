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
        Schema::create('insert_properties', function (Blueprint $table) {
            $table->id();
            $table->integer('quantity');
            $table->decimal('weight', 8, 3);
            $table->string('weight_unit');
            $table->json('dimensions');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('insert_properties');
    }
};
