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
        Schema::create('stones', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('stone_type_id');
            $table->string('name');
            $table->string('description');
            $table->string('slug');
            $table->boolean('is_natural');
            $table->boolean('is_active');
            $table->timestamps();

            $table->foreign('stone_type_id')->references('id')->on('stone_types');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stones');
    }
};
