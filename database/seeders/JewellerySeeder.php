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
        DB::table('brooch_props')->truncate();
        DB::table('tie_clip_props')->truncate();
        DB::table('cuff_link_props')->truncate();
        DB::table('ring_props')->truncate();
        DB::table('chain_props')->truncate();
        DB::table('bracelet_prop_bracelet_size')->truncate();
        DB::table('bracelet_prop_weaving')->truncate();
        DB::table('ring_prop_ring_size')->truncate();
        DB::table('chain_prop_chain_size')->truncate();
        DB::table('chain_prop_weaving')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $items = config('seeding-data.jewelleries.jewelleries');

        foreach ($items as $item) {
            $jewellery_id = DB::table('jewelleries')->insertGetId([
                'prcs_metal_id' => DB::table('prcs_metals')->where('name', $item['prcs_metal'])->first()->id,
                'prcs_metal_sample_id' => DB::table('prcs_metal_samples')->where('value', $item['prcs_metal_sample'])->first()->id,
                'prcs_metal_colour_id' => DB::table('prcs_metal_colours')->where('name', $item['prcs_metal_colour'])->first()->id,
                'jewellery_category_id' => DB::table('jewellery_categories')->where('name', $item['jewellery_category'])->first()->id,
                'name' => $item['name'],
                'description' => $item['description'],
                'part_number' => $item['part_number'],
                'approx_weight' => $item['approx_weight'],
                'created_at' => now(),
            ]);

            $funcName = $item['props']['name-function'];
            $params = $item['props']['parameters'];
            $this->$funcName($item, $jewellery_id);
//            dump($funcName);
            if ($item['insert-jewellery']) {
                foreach ($item['insert-jewellery'] as $jewellery) {
                    $property_id = DB::table('insert_properties')->insertGetId([
                        'quantity' => $jewellery['insert_property']['quantity'],
                        'weight' => $jewellery['insert_property']['weight'],
                        'weight_unit' => $jewellery['insert_property']['weight_unit'],
                        'dimensions' => json_encode($jewellery['insert_property']['dimensions']),
                        'created_at' => now(),
                    ]);
                    $insert_id = DB::table('inserts')->insertGetId([
                        'jewellery_id' => $jewellery_id,
                        'stone_id' => DB::table('stones')->where('name', $jewellery['stone'])->first()->id,
                        'insert_property_id' => $property_id,
                        'insert_shape_id' => DB::table('insert_shapes')->where('name', $jewellery['insert_shape'])->first()->id,
                        'insert_colour_id' => DB::table('insert_colours')->where('name', $jewellery['insert_colour'])->first()->id,
                        'created_at' => now(),
                    ]);
                }
            }
            if ($item['coverage-jewellery']) {
                foreach ($item['coverage-jewellery'] as $coverage) {
                    DB::table('coverage_jewellery')->insert([
                        'coverage_id' => DB::table('coverages')->where('name', $coverage)->first()->id,
                        'jewellery_id' => $jewellery_id,
                        'created_at' => now(),
                    ]);
                }
            }
        }
    }
    private function getBraceletProps(array $item, int $jewellery_id): int
    {
        $bracelet_prop_id = DB::table('bracelet_props')->insertGetId([
            'jewellery_id' => $jewellery_id,
            'body_part' => 'на руку',
            'created_at' => now(),
        ]);

        foreach ($item['props']['parameters']['bracelet_sizes'] as $size) {
            DB::table('bracelet_prop_bracelet_size')->insert([
                'bracelet_prop_id' => $bracelet_prop_id,
                'bracelet_size_id' => DB::table('bracelet_sizes')->where('value', $size)->first()->id,
                'quantity' => $item['props']['parameters']['quantity'],
                'price' => $item['props']['parameters']['price'],
                'created_at' => now(),
            ]);
        }

        if ($item['props']['parameters']['weaving']) {
            dump($item['props']['parameters']['weaving']);
            DB::table('bracelet_prop_weaving')->insert([
                'bracelet_prop_id' => $bracelet_prop_id,
                'weaving_id' => DB::table('weavings')->where('name', $item['props']['parameters']['weaving']['weaving'])->first()->id,
                'fullness' => $item['props']['parameters']['weaving']['fullness'],
                'wire_diameter' => $item['props']['parameters']['weaving']['wire_diameter'],
                'created_at' => now(),
            ]);
        }

        return $bracelet_prop_id;
    }

    private function getBroochProps(array $item, int $jewellery_id): int
    {
        return $brooch_prop_id = DB::table('brooch_props')->insertGetId([
            'jewellery_id' => $jewellery_id,
            'quantity' => $item['props']['parameters']['quantity'],
            'price' => $item['props']['parameters']['price'],
            'created_at' => now(),
        ]);
    }

    private function getTieClipProps(array $item, int $jewellery_id): int
    {
        return $tie_clip_prop_id = DB::table('tie_clip_props')->insertGetId([
            'jewellery_id' => $jewellery_id,
            'quantity' => $item['props']['parameters']['quantity'],
            'price' => $item['props']['parameters']['price'],
            'created_at' => now(),
        ]);
    }

    private function getCuffLinkProps(array $item, int $jewellery_id): int
    {
        return $cuff_link_prop_id = DB::table('cuff_link_props')->insertGetId([
            'jewellery_id' => $jewellery_id,
            'quantity' => $item['props']['parameters']['quantity'],
            'price' => $item['props']['parameters']['price'],
            'created_at' => now(),
        ]);
    }
}
