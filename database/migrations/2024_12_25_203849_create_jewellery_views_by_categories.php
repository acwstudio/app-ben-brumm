<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::statement(
            <<<'SQL'
            CREATE VIEW jewellery_bracelets AS
            select
                bp.id as id,
                j.name as jewellery,
                pm.name as metal,
                j.prcs_metal_id,
                pmc.name as colour,
                j.prcs_metal_colour_id,
                pms.value as sample,
                j.prcs_metal_sample_id,
                js.name as category,
                j.part_number,
                j.approx_weight,
                bp.body_part,
                w.name as weave,
                bpw.fullness,
                bpw.wire_diameter
            from jewelleries j
            join bracelet_props bp on j.id = bp.jewellery_id
            join prcs_metals pm on j.prcs_metal_id = pm.id
            join prcs_metal_colours pmc on j.prcs_metal_colour_id = pmc.id
            join prcs_metal_samples pms on j.prcs_metal_sample_id = pms.id
            join jewellery_categories js on j.jewellery_category_id = js.id
            left join bracelet_prop_weaving bpw on bp.id = bpw.bracelet_prop_id
            left join weavings w on bpw.weaving_id = w.id
            SQL
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement('DROP VIEW jewellery_bracelets;');
    }
};
