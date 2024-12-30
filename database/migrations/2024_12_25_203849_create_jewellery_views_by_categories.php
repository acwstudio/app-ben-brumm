<?php

use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::statement(
            <<<'SQL'
            CREATE VIEW bracelet_prop_views AS
            select
                bp.id as id,
                bp.body_part,
                bp.jewellery_id,
                w.name as weave,
                bpw.fullness,
                bpw.wire_diameter,
                json_arrayagg(json_object('quantity',bps.quantity, 'price', bps.price, 'size', bs.value)) as props
            from bracelet_props bp
            left join bracelet_prop_weavings bpw on bp.id = bpw.bracelet_prop_id
            left join weavings w on bpw.weaving_id = w.id
            join bracelet_prop_sizes bps on bp.id = bps.bracelet_prop_id
            join bracelet_sizes bs on bps.bracelet_size_id = bs.id
            group by bp.id, weave, bpw.fullness, bpw.wire_diameter
            SQL
        );

        DB::statement(
            <<<'SQL'
            CREATE VIEW chain_prop_views AS
            select
                chp.id as id,
                w.name as weave,
                chpw.fullness,
                chpw.wire_diameter
            from chain_props chp
            join chain_prop_weavings chpw on chp.id = chpw.chain_prop_id
            join weavings w on chpw.weaving_id = w.id
            SQL
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement('DROP VIEW bracelet_prop_views;');
        DB::statement('DROP VIEW chain_prop_views;');
    }
};
