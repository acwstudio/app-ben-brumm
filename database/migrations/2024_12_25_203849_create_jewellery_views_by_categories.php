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
                chp.jewellery_id,
                w.name as weave,
                chpw.fullness,
                chpw.wire_diameter,
                json_arrayagg(json_object('quantity',chps.quantity, 'price', chps.price, 'size', chs.value)) as props
            from chain_props chp
            left join chain_prop_weavings chpw on chp.id = chpw.chain_prop_id
            left join weavings w on chpw.weaving_id = w.id
            join chain_prop_sizes chps on chps.chain_prop_id = chp.id
            join chain_sizes chs on chps.chain_size_id = chs.id
            group by chp.id, weave, chpw.fullness, chpw.wire_diameter
            SQL
        );

        DB::statement(
            <<<'SQL'
            CREATE VIEW jewellery_prop_views AS
            select
                cast(concat(j.id, bs.id) as unsigned) as id,
                j.name as jewellery,
                bp.jewellery_id as jewerelly_id,
                bps.quantity as quantity,
                bps.price as price,
                bs.value as size
            from bracelet_props bp
                join jewelleries j on bp.jewellery_id = j.id
                join bracelet_prop_sizes bps on bp.id = bps.bracelet_prop_id
                join bracelet_sizes bs on bps.bracelet_size_id = bs.id
            union
            select
                cast(concat(j.id, chs.id) as unsigned) as id,
                j.name as jewellery,
                chp.jewellery_id as jewerelly_id,
                chps.quantity as quantity,
                chps.price as price,
                chs.value as size
            from chain_props chp
                join jewelleries j on chp.jewellery_id = j.id
                join chain_prop_sizes chps on chps.chain_prop_id = chp.id
                join chain_sizes chs on chps.chain_size_id = chs.id
            union
            select
                cast(concat(j.id, rs.id) as unsigned) as id,
                j.name as jewellery,
                rp.jewellery_id as jewerelly_id,
                rps.quantity as quantity,
                rps.price as price,
                rs.value as size
            from ring_props rp
                join jewelleries j on rp.jewellery_id = j.id
                join ring_prop_sizes rps on rps.ring_prop_id = rp.id
                join ring_sizes rs on rps.ring_size_id = rs.id
            union
            select
                cast(concat(j.id, brp.id) as unsigned) as id,
                j.name as jewellery,
                brp.jewellery_id as jewerelly_id,
                brp.quantity as quantity,
                brp.price as price,
                null AS size
            from brooch_props brp
                join jewelleries j on brp.jewellery_id = j.id
            union
            select
                cast(concat(j.id, tcp.id) as unsigned) as id,
                j.name as jewellery,
                tcp.jewellery_id as jewerelly_id,
                tcp.quantity as quantity,
                tcp.price as price,
                null AS size
            from tie_clip_props tcp
                join jewelleries j on tcp.jewellery_id = j.id
            union
            select
                cast(concat(j.id, clp.id) as unsigned) as id,
                j.name as jewellery,
                clp.jewellery_id as jewerelly_id,
                clp.quantity as quantity,
                clp.price as price,
                null AS size
            from cuff_link_props clp
                join jewelleries j on clp.jewellery_id = j.id
            union
            select
                cast(concat(j.id, ns.id) as unsigned) as id,
                j.name as jewellery,
                np.jewellery_id as jewerelly_id,
                nps.quantity as quantity,
                nps.price as price,
                ns.value as size
            from necklace_props np
                join jewelleries j on np.jewellery_id = j.id
                join necklace_prop_sizes nps on nps.necklace_prop_id = np.id
                join necklace_sizes ns on nps.necklace_size_id = ns.id
            union
            select
                cast(concat(j.id, pp.id) as unsigned) as id,
                j.name as jewellery,
                pp.jewellery_id as jewerelly_id,
                pp.quantity as quantity,
                pp.price as price,
                null AS size
            from pendant_props pp
                join jewelleries j on pp.jewellery_id = j.id
            union
            select
                cast(concat(j.id, chpp.id) as unsigned) as id,
                j.name as jewellery,
                chpp.jewellery_id as jewerelly_id,
                chpp.quantity as quantity,
                chpp.price as price,
                null AS size
            from charm_pendant_props chpp
                join jewelleries j on chpp.jewellery_id = j.id
            union
            select
                cast(concat(j.id, prcp.id) as unsigned) as id,
                j.name as jewellery,
                prcp.jewellery_id as jewerelly_id,
                prcp.quantity as quantity,
                prcp.price as price,
                null AS size
            from piercing_props prcp
                join jewelleries j on prcp.jewellery_id = j.id
            union
            select
                cast(concat(j.id, ep.id) as unsigned) as id,
                j.name as jewellery,
                ep.jewellery_id as jewerelly_id,
                ep.quantity as quantity,
                ep.price as price,
                null AS size
            from earring_props ep
                join jewelleries j on ep.jewellery_id = j.id
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
        DB::statement('DROP VIEW jewellery_prop_views;');
    }
};
