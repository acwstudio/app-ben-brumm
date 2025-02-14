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
            CREATE VIEW jewellery_views AS
            select
                j.id as id,
                j.name as jewellery,
                j.prcs_metal_sample_id,
                j.prcs_metal_colour_id,
                j.prcs_metal_id,
                j.jewellery_category_id,
                j.description,
                j.part_number,
                j.approx_weight,
                j.is_active,
                d.name as promotion,
                bp.jewellery_id as jewerelly_id,
                json_arrayagg(json_object(
                        'quantity',bps.quantity,
                        'price', bps.price,
                        'promote name', d.name,
                        'discount', round(((1 - d.rate) * bps.price), -1),
                        'size', bs.value)
                ) as props
            from bracelet_props bp
                join jewelleries j on bp.jewellery_id = j.id
                left join discount_jewellery d_jw on j.id = d_jw.jewellery_id
                left join discounts d on d_jw.discount_id = d.id
                join bracelet_prop_sizes bps on bp.id = bps.bracelet_prop_id
                join bracelet_sizes bs on bps.bracelet_size_id = bs.id
            group by j.id, d.name, rate
            union
            select
                j.id as id,
                j.name as jewellery,
                j.prcs_metal_sample_id,
                j.prcs_metal_colour_id,
                j.prcs_metal_id,
                j.jewellery_category_id,
                j.description,
                j.part_number,
                j.approx_weight,
                j.is_active,
                d.name as promotion,
                chp.jewellery_id as jewerelly_id,
                json_arrayagg(json_object(
                        'quantity',chps.quantity,
                        'price', chps.price,
                        'promote name', d.name,
                        'discount', round(((1 - d.rate) * chps.price), -1),
                        'size', chs.value)
                ) as props
            from chain_props chp
                join jewelleries j on chp.jewellery_id = j.id
                left join discount_jewellery d_jw on j.id = d_jw.jewellery_id
                left join discounts d on d_jw.discount_id = d.id
                join chain_prop_sizes chps on chps.chain_prop_id = chp.id
                join chain_sizes chs on chps.chain_size_id = chs.id
            group by j.id, d.name, rate
            union
            select
                j.id as id,
                j.name as jewellery,
                j.prcs_metal_sample_id,
                j.prcs_metal_colour_id,
                j.prcs_metal_id,
                j.jewellery_category_id,
                j.description,
                j.part_number,
                j.approx_weight,
                j.is_active,
                d.name as promotion,
                rp.jewellery_id as jewerelly_id,
                json_arrayagg(json_object(
                        'quantity',rps.quantity,
                        'price', rps.price,
                        'promote name', d.name,
                        'discount', round(((1 - d.rate) * rps.price), -1),
                        'size', rs.value)
                ) as props
            from ring_props rp
                join jewelleries j on rp.jewellery_id = j.id
                left join discount_jewellery d_jw on j.id = d_jw.jewellery_id
                left join discounts d on d_jw.discount_id = d.id
                join ring_prop_sizes rps on rps.ring_prop_id = rp.id
                join ring_sizes rs on rps.ring_size_id = rs.id
            group by j.id, d.name, rate
            union
            select
                j.id as id,
                j.name as jewellery,
                j.prcs_metal_sample_id,
                j.prcs_metal_colour_id,
                j.prcs_metal_id,
                j.jewellery_category_id,
                j.description,
                j.part_number,
                j.approx_weight,
                j.is_active,
                d.name as promotion,
                brp.jewellery_id as jewerelly_id,
                json_arrayagg(json_object(
                        'quantity',brp.quantity,
                        'price', brp.price,
                        'promote name', d.name,
                        'discount', round(((1 - d.rate) * brp.price), -1),
                        'size', null)
                ) as props
            from brooch_props brp
                join jewelleries j on brp.jewellery_id = j.id
                left join discount_jewellery d_jw on j.id = d_jw.jewellery_id
                left join discounts d on d_jw.discount_id = d.id
            group by j.id, d.name, rate
            union
            select
                j.id as id,
                j.name as jewellery,
                j.prcs_metal_sample_id,
                j.prcs_metal_colour_id,
                j.prcs_metal_id,
                j.jewellery_category_id,
                j.description,
                j.part_number,
                j.approx_weight,
                j.is_active,
                d.name as promotion,
                tcp.jewellery_id as jewerelly_id,
                json_arrayagg(json_object(
                        'quantity',tcp.quantity,
                        'price', tcp.price,
                        'promote name', d.name,
                        'discount', round(((1 - d.rate) * tcp.price), -1),
                        'size', null)
                ) as props
            from tie_clip_props tcp
                join jewelleries j on tcp.jewellery_id = j.id
                left join discount_jewellery d_jw on j.id = d_jw.jewellery_id
                left join discounts d on d_jw.discount_id = d.id
            group by j.id, d.name, rate
            union
            select
                j.id as id,
                j.name as jewellery,
                j.prcs_metal_sample_id,
                j.prcs_metal_colour_id,
                j.prcs_metal_id,
                j.jewellery_category_id,
                j.description,
                j.part_number,
                j.approx_weight,
                j.is_active,
                d.name as promotion,
                clp.jewellery_id as jewerelly_id,
                json_arrayagg(json_object(
                        'quantity',clp.quantity,
                        'price', clp.price,
                        'promote name', d.name,
                        'discount', round(((1 - d.rate) * clp.price), -1),
                        'size', null)
                ) as props
            from cuff_link_props clp
                join jewelleries j on clp.jewellery_id = j.id
                left join discount_jewellery d_jw on j.id = d_jw.jewellery_id
                left join discounts d on d_jw.discount_id = d.id
            group by j.id, d.name, rate
            union
            select
                j.id as id,
                j.name as jewellery,
                j.prcs_metal_sample_id,
                j.prcs_metal_colour_id,
                j.prcs_metal_id,
                j.jewellery_category_id,
                j.description,
                j.part_number,
                j.approx_weight,
                j.is_active,
                d.name as promotion,
                np.jewellery_id as jewerelly_id,
                json_arrayagg(json_object(
                        'quantity',nps.quantity,
                        'price', nps.price,
                        'promote name', d.name,
                        'discount', round(((1 - d.rate) * nps.price), -1),
                        'size', ns.value)
                ) as props
            from necklace_props np
                join jewelleries j on np.jewellery_id = j.id
                left join discount_jewellery d_jw on j.id = d_jw.jewellery_id
                left join discounts d on d_jw.discount_id = d.id
                join necklace_prop_sizes nps on nps.necklace_prop_id = np.id
                join necklace_sizes ns on nps.necklace_size_id = ns.id
            group by j.id, d.name, rate
            union
            select
                j.id as id,
                j.name as jewellery,
                j.prcs_metal_sample_id,
                j.prcs_metal_colour_id,
                j.prcs_metal_id,
                j.jewellery_category_id,
                j.description,
                j.part_number,
                j.approx_weight,
                j.is_active,
                d.name as promotion,
                pp.jewellery_id as jewerelly_id,
                json_arrayagg(json_object(
                        'quantity',pp.quantity,
                        'price', pp.price,
                        'promote name', d.name,
                        'discount', round(((1 - d.rate) * pp.price), -1),
                        'size', null)
                ) as props
            from pendant_props pp
                join jewelleries j on pp.jewellery_id = j.id
                left join discount_jewellery d_jw on j.id = d_jw.jewellery_id
                left join discounts d on d_jw.discount_id = d.id
            group by j.id, d.name, rate
            union
            select
                j.id as id,
                j.name as jewellery,
                j.prcs_metal_sample_id,
                j.prcs_metal_colour_id,
                j.prcs_metal_id,
                j.jewellery_category_id,
                j.description,
                j.part_number,
                j.approx_weight,
                j.is_active,
                d.name as promotion,
                chpp.jewellery_id as jewerelly_id,
                json_arrayagg(json_object(
                        'quantity',chpp.quantity,
                        'price', chpp.price,
                        'promote name', d.name,
                        'discount', round(((1 - d.rate) * chpp.price), -1),
                        'size', null)
                ) as props
            from charm_pendant_props chpp
                join jewelleries j on chpp.jewellery_id = j.id
                left join discount_jewellery d_jw on j.id = d_jw.jewellery_id
                left join discounts d on d_jw.discount_id = d.id
            group by j.id, d.name, rate
            union
            select
                j.id as id,
                j.name as jewellery,
                j.prcs_metal_sample_id,
                j.prcs_metal_colour_id,
                j.prcs_metal_id,
                j.jewellery_category_id,
                j.description,
                j.part_number,
                j.approx_weight,
                j.is_active,
                d.name as promotion,
                prcp.jewellery_id as jewerelly_id,
                json_arrayagg(json_object(
                        'quantity',prcp.quantity,
                        'price', prcp.price,
                        'promote name', d.name,
                        'discount', round(((1 - d.rate) * prcp.price), -1),
                        'size', null)
                ) as props
            from piercing_props prcp
                join jewelleries j on prcp.jewellery_id = j.id
                left join discount_jewellery d_jw on j.id = d_jw.jewellery_id
                left join discounts d on d_jw.discount_id = d.id
            group by j.id, d.name, rate
            union
            select
                j.id as id,
                j.name as jewellery,
                j.prcs_metal_sample_id,
                j.prcs_metal_colour_id,
                j.prcs_metal_id,
                j.jewellery_category_id,
                j.description,
                j.part_number,
                j.approx_weight,
                j.is_active,
                d.name as promotion,
                ep.jewellery_id as jewerelly_id,
                json_arrayagg(json_object(
                        'quantity',ep.quantity,
                        'price', ep.price,
                        'promote name', d.name,
                        'discount', round(((1 - d.rate) * ep.price), -1),
                        'size', null)
                ) as props
            from earring_props ep
                join jewelleries j on ep.jewellery_id = j.id
                left join discount_jewellery d_jw on j.id = d_jw.jewellery_id
                left join discounts d on d_jw.discount_id = d.id
            group by j.id, d.name, rate
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
        DB::statement('DROP VIEW jewellery_views;');
    }
};
