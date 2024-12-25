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
        Schema::create('clasps', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('jewellery_categories', function (Blueprint $table) {
            $table->id();
            $table->string('category_code')->unique();
            $table->string('name')->unique();
            $table->string('slug');
            $table->timestamps();
        });

        Schema::create('weavings', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->timestamps();
        });

        Schema::create('jewelleries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('prcs_metal_sample_id');
            $table->unsignedBigInteger('prcs_metal_colour_id');
            $table->unsignedBigInteger('prcs_metal_id');
            $table->unsignedBigInteger('jewellery_category_id');
            $table->string('name');
            $table->string('description');
            $table->string('part_number')->unique();
            $table->string('approx_weight');
            $table->timestamps();

            $table->foreign('prcs_metal_sample_id')->references('id')->on('prcs_metal_samples');
            $table->foreign('prcs_metal_colour_id')->references('id')->on('prcs_metal_colours');
            $table->foreign('prcs_metal_id')->references('id')->on('prcs_metals');
            $table->foreign('jewellery_category_id')->references('id')->on('jewellery_categories');
        });

        //************ RING PROPS **************
        Schema::create('ring_props', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('jewellery_id');
            $table->json('dimensions');
            $table->timestamps();

            $table->foreign('jewellery_id')->references('id')->on('jewelleries');
        });

        Schema::create('ring_sizes', function (Blueprint $table) {
            $table->id();
            $table->decimal('value')->unique();
            $table->string('unit')->default('мм');
            $table->timestamps();
        });

        Schema::create('ring_prop_ring_size', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ring_size_id');
            $table->unsignedBigInteger('ring_prop_id');
            $table->integer('quantity');
            $table->decimal('price', 8, 2);
            $table->timestamps();

            $table->foreign('ring_size_id')->references('id')->on('ring_sizes');
            $table->foreign('ring_prop_id')->references('id')->on('ring_props');
        });

        //************ BRACELET PROPS **************
        Schema::create('bracelet_props', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('jewellery_id');
            $table->string('body_part');
            $table->timestamps();

            $table->foreign('jewellery_id')->references('id')->on('jewelleries');
        });

        Schema::create('bracelet_sizes', function (Blueprint $table) {
            $table->id();
            $table->decimal('value')->unique();
            $table->string('unit')->default('см');
            $table->timestamps();
        });

        Schema::create('bracelet_prop_bracelet_size', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('bracelet_size_id');
            $table->unsignedBigInteger('bracelet_prop_id');
            $table->integer('quantity');
            $table->decimal('price', 8, 2);
            $table->timestamps();

            $table->foreign('bracelet_size_id')->references('id')->on('bracelet_sizes');
            $table->foreign('bracelet_prop_id')->references('id')->on('bracelet_props');
        });

        Schema::create('bracelet_prop_weaving', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('weaving_id');
            $table->unsignedBigInteger('bracelet_prop_id');
            $table->string('fullness');
            $table->string('wire_diameter');
            $table->timestamps();

            $table->foreign('weaving_id')->references('id')->on('weavings');
            $table->foreign('bracelet_prop_id')->references('id')->on('bracelet_props');
        });

        //************ BROOCH PROPS **************
        Schema::create('brooch_props', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('jewellery_id');
            $table->integer('quantity');
            $table->decimal('price', 8, 2);
            $table->timestamps();

            $table->foreign('jewellery_id')->references('id')->on('jewelleries');
        });

        //************ TIE CLIP PROPS **************
        Schema::create('tie_clip_props', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('jewellery_id');
            $table->integer('quantity');
            $table->decimal('price', 8, 2);
            $table->timestamps();

            $table->foreign('jewellery_id')->references('id')->on('jewelleries');
        });

        //************ CUFF LINK PROPS **************
        Schema::create('cuff_link_props', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('jewellery_id');
            $table->integer('quantity');
            $table->decimal('price', 8, 2);
            $table->timestamps();

            $table->foreign('jewellery_id')->references('id')->on('jewelleries');
        });

        //************ PIERCING PROPS **************
        Schema::create('piercing_props', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('jewellery_id');
            $table->integer('quantity');
            $table->decimal('price', 8, 2);
            $table->timestamps();

            $table->foreign('jewellery_id')->references('id')->on('jewelleries');
        });

        //************ PENDANT PROPS **************
        Schema::create('pendant_props', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('jewellery_id');
            $table->integer('quantity');
            $table->decimal('price', 8, 2);
            $table->timestamps();

            $table->foreign('jewellery_id')->references('id')->on('jewelleries');
        });

        //************ CHARM PENDANT PROPS **************
        Schema::create('charm_pendant_props', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('jewellery_id');
            $table->integer('quantity');
            $table->decimal('price', 8, 2);
            $table->timestamps();

            $table->foreign('jewellery_id')->references('id')->on('jewelleries');
        });

        //************ EARRING PROPS **************
        Schema::create('earring_props', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('jewellery_id');
            $table->unsignedBigInteger('clasp_id');
            $table->integer('quantity');
            $table->decimal('price', 8, 2);
            $table->timestamps();

            $table->foreign('jewellery_id')->references('id')->on('jewelleries');
        });

        //************ NECKLACE PROPS **************
        Schema::create('necklace_props', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('jewellery_id');
            $table->timestamps();

            $table->foreign('jewellery_id')->references('id')->on('jewelleries');
        });

        Schema::create('necklace_sizes', function (Blueprint $table) {
            $table->id();
            $table->decimal('value', 8, 2);
            $table->string('unit')->default('см');
            $table->timestamps();
        });

        Schema::create('necklace_prop_necklace_size', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('necklace_size_id');
            $table->unsignedBigInteger('necklace_prop_id');
            $table->integer('quantity');
            $table->decimal('price', 8, 2);
            $table->timestamps();

            $table->foreign('necklace_size_id')->references('id')->on('necklace_sizes');
            $table->foreign('necklace_prop_id')->references('id')->on('necklace_props');
        });

        //************ CHAIN PROPS **************
        Schema::create('chain_props', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('jewellery_id');
            $table->timestamps();

            $table->foreign('jewellery_id')->references('id')->on('jewelleries');
        });

        Schema::create('chain_sizes', function (Blueprint $table) {
            $table->id();
            $table->decimal('value', 8, 2);
            $table->string('unit')->default('см');
            $table->timestamps();
        });

        Schema::create('chain_prop_chain_size', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('chain_size_id');
            $table->unsignedBigInteger('chain_prop_id');
            $table->integer('quantity');
            $table->decimal('price', 8, 2);
            $table->timestamps();

            $table->foreign('chain_size_id')->references('id')->on('chain_sizes');
            $table->foreign('chain_prop_id')->references('id')->on('chain_props');
        });

        Schema::create('chain_prop_weaving', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('weaving_id');
            $table->unsignedBigInteger('chain_prop_id');
            $table->string('fullness');
            $table->string('wire_diameter');
            $table->timestamps();

            $table->foreign('weaving_id')->references('id')->on('weavings');
            $table->foreign('chain_prop_id')->references('id')->on('chain_props');
        });

        //************ COVERAGE JEWELLERY **************
        Schema::create('coverage_jewellery', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('coverage_id');
            $table->unsignedBigInteger('jewellery_id');
            $table->timestamps();

            $table->foreign('coverage_id')->references('id')->on('coverages');
            $table->foreign('jewellery_id')->references('id')->on('jewelleries');

            $table->unique(['coverage_id', 'jewellery_id'], 'unique_coverage_jewellery');
        });

        Schema::table('inserts', function (Blueprint $table) {
            $table->foreign('jewellery_id')->references('id')->on('jewelleries');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('inserts', function (Blueprint $table) {
            $table->dropConstrainedForeignId('jewellery_id');
        });

        Schema::dropIfExists('ring_prop_ring_size');
        Schema::dropIfExists('ring_sizes');
        Schema::dropIfExists('ring_props');
        Schema::dropIfExists('bracelet_prop_bracelet_size');
        Schema::dropIfExists('bracelet_prop_weaving');
        Schema::dropIfExists('bracelet_sizes');
        Schema::dropIfExists('bracelet_props');
        Schema::dropIfExists('brooch_props');
        Schema::dropIfExists('tie_clip_props');
        Schema::dropIfExists('chain_prop_chain_size');
        Schema::dropIfExists('chain_prop_weaving');
        Schema::dropIfExists('weavings');
        Schema::dropIfExists('chain_sizes');
        Schema::dropIfExists('chain_props');
        Schema::dropIfExists('cuff_link_props');
        Schema::dropIfExists('piercing_props');
        Schema::dropIfExists('pendant_props');
        Schema::dropIfExists('earring_props');
        Schema::dropIfExists('clasps');
        Schema::dropIfExists('charm_pendant_props');
        Schema::dropIfExists('necklace_prop_necklace_size');
        Schema::dropIfExists('necklace_sizes');
        Schema::dropIfExists('necklace_props');
        Schema::dropIfExists('coverage_jewellery');
        Schema::dropIfExists('jewelleries');
        Schema::dropIfExists('jewellery_categories');
    }
};
