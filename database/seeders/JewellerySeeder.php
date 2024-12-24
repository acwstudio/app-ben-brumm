<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JewellerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('jewelleries')->truncate();
        DB::table('inserts')->truncate();
        DB::table('coverage_jewellery')->truncate();
        DB::table('insert_properties')->truncate();
        DB::table('bracelet_props')->truncate();
        DB::table('ring_props')->truncate();
        DB::table('chain_props')->truncate();
        DB::table('bracelet_prop_bracelet_size')->truncate();
        DB::table('ring_prop_ring_size')->truncate();
        DB::table('chain_prop_chain_size')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $items = config('seeding-data.jewelleries.jewelleries');

        foreach ($items as $item) {
            $jewellery_id = DB::table('jewelleries')->insertGetId([
                'prcs_metal_id' => $item['prcs_metal_id'],
                'prcs_metal_sample_id' => $item['prcs_metal_sample_id'],
                'prcs_metal_colour_id' => $item['prcs_metal_colour_id'],
                'jewellery_category_id' => $item['jewellery_category_id'],
                'name' => $item['name'],
                'description' => $item['description'],
                'part_number' => $item['part_number'],
                'approx_weight' => $item['approx_weight'],
                'price' => $item['price'],
                'created_at' => now(),
            ]);
            if ($item['bracelet-props']) {
                foreach ($item['bracelet-props'] as $prop) {
                    $bracelet_prop_id = DB::table('bracelet_props')->insertGetId([
                        'weaving_id' => $prop['weaving_id'],
                        'jewellery_category_id' => $prop['jewellery_category_id'],
                        'body_part' => 'на руку',
                    ]);

                    foreach ($prop['bracelet_size_ids'] as $size) {
                        DB::table('bracelet_prop_bracelet_size')->insert([
                            'bracelet_prop_id' => $bracelet_prop_id,
                            'bracelet_size_id' => $size,
                        ]);
                    }
                }

            }
            if ($item['ring_props']) {
                foreach ($item['ring_props'] as $prop) {
                    $ring_prop_id = DB::table('ring_props')->insertGetId([
                        'jewellery_category_id' => $prop['jewellery_category_id'],
                        'width' => $prop['width'],
                    ]);
                    foreach ($prop['ring_size_ids'] as $size) {
                        DB::table('ring_prop_ring_size')->insert([
                            'ring_prop_id' => $ring_prop_id,
                            'ring_size_id' => $size,
                        ]);
                    }
                }
            }
            if ($item['chain_props']) {
                foreach ($item['chain_props'] as $prop) {
                    $chain_prop_id = DB::table('chain_props')->insertGetId([
                        'jewellery_category_id' => $prop['jewellery_category_id'],
                        'weaving_id' => $prop['weaving_id'],
                        'type' => $prop['type'],
                        'wire_diameter' => $prop['wire_diameter'],
                    ]);
                    foreach ($prop['chain_size_ids'] as $size) {
                        DB::table('chain_prop_chain_size')->insert([
                            'chain_prop_id' => $chain_prop_id,
                            'chain_size_id' => $size,
                        ]);
                    }
                }
            }
            if ($item['insert-jewellery']) {
                foreach ($item['insert-jewellery'] as $jewellery) {
                    $property_id = DB::table('insert_properties')->insertGetId([
                        'quantity' => $jewellery['insert_property_id']['quantity'],
                        'weight' => $jewellery['insert_property_id']['weight'],
                        'weight_unit' => $jewellery['insert_property_id']['weight_unit'],
                        'dimensions' => json_encode($jewellery['insert_property_id']['dimensions']),
                        'created_at' => now(),
                    ]);
                    $insert_id = DB::table('inserts')->insertGetId([
                        'jewellery_id' => $jewellery_id,
                        'stone_id' => $jewellery['stone_id'],
                        'insert_property_id' => $property_id,
                        'insert_shape_id' => $jewellery['insert_shape_id'],
                        'insert_colour_id' => $jewellery['insert_colour_id'],
                        'created_at' => now(),
                    ]);
                }
            }
            if ($item['coverage-jewellery']) {
                foreach ($item['coverage-jewellery'] as $jewellery) {
                    DB::table('coverage_jewellery')->insert([
                        'coverage_id' => $jewellery,
                        'jewellery_id' => $jewellery_id,
                    ]);
                }
            }
        }
    }
}
