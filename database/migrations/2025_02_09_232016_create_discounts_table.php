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
        Schema::create('discounts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->float('rate', 2)->default(0);
            $table->timestamps();
        });

        Schema::create('shock_prices', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('jewellery_prop_view_id');
            $table->decimal('price', 8, 2)->default(0);
            $table->timestamps();
        });

        Schema::create('discount_jewellery_prop_view', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('jewellery_prop_view_id');
            $table->unsignedBigInteger('discount_id');
            $table->timestamps();
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('discounts');
        Schema::dropIfExists('shock_prices');
        Schema::dropIfExists('discount_jewellery_prop_view');
    }
};
