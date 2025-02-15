<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

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
        DB::table('jewellery_prcs_metal_coverage')->truncate();
        DB::table('insert_properties')->truncate();
        DB::table('bracelet_props')->truncate();
        DB::table('bracelet_prop_sizes')->truncate();
        DB::table('bracelet_prop_weavings')->truncate();
        DB::table('brooch_props')->truncate();
        DB::table('tie_clip_props')->truncate();
        DB::table('cuff_link_props')->truncate();
        DB::table('piercing_props')->truncate();
        DB::table('pendant_props')->truncate();
        DB::table('earring_props')->truncate();
        DB::table('charm_pendant_props')->truncate();
        DB::table('ring_props')->truncate();
        DB::table('ring_prop_sizes')->truncate();
        DB::table('chain_props')->truncate();
        DB::table('chain_prop_sizes')->truncate();
        DB::table('chain_prop_weavings')->truncate();
        DB::table('necklace_props')->truncate();
        DB::table('necklace_prop_sizes')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $items = config('seeding-data.jewelleries.jewelleries');

        foreach ($items as $item) {
            $jewellery_id = DB::table('jewelleries')->insertGetId([
                'prcs_metal_id' => DB::table('prcs_metals')->where('name', $item['prcs_metal'])->first()->id,
                'prcs_metal_sample_id' => DB::table('prcs_metal_samples')->where('value', $item['prcs_metal_sample'])->first()->id,
                'prcs_metal_colour_id' => DB::table('prcs_metal_colours')->where('name', $item['prcs_metal_colour'])->first()->id,
                'jewellery_category_id' => DB::table('jewellery_categories')->where('name', $item['jewellery_category'])->first()->id,
                'name' => $item['name'],
                'slug' => Str::slug($item['name'], '-'),
                'description' => $item['description'],
                'part_number' => $item['part_number'],
                'approx_weight' => $item['approx_weight'],
                'is_active' => $item['is_active'],
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
                    DB::table('jewellery_prcs_metal_coverage')->insert([
                        'prcs_metal_coverage_id' => DB::table('prcs_metal_coverages')->where('name', $coverage)->first()->id,
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
            DB::table('bracelet_prop_sizes')->insert([
                'bracelet_prop_id' => $bracelet_prop_id,
                'bracelet_size_id' => DB::table('bracelet_sizes')->where('value', $size)->first()->id,
                'quantity' => $item['props']['parameters']['quantity'],
                'price' => $item['props']['parameters']['price'],
                'created_at' => now(),
            ]);
        }

        if ($item['props']['parameters']['weaving']) {
            dump($item['props']['parameters']['weaving']);
            DB::table('bracelet_prop_weavings')->insert([
                'bracelet_prop_id' => $bracelet_prop_id,
                'weaving_id' => DB::table('weavings')->where('name', $item['props']['parameters']['weaving']['weaving'])->first()->id,
                'fullness' => $item['props']['parameters']['weaving']['fullness'],
                'wire_diameter' => $item['props']['parameters']['weaving']['wire_diameter'],
                'created_at' => now(),
            ]);
        }

        return $bracelet_prop_id;
    }

    private function getChainProps(array $item, int $jewellery_id): int
    {
        $chain_prop_id = DB::table('chain_props')->insertGetId([
            'jewellery_id' => $jewellery_id,
            'created_at' => now(),
        ]);

        foreach ($item['props']['parameters']['chain_sizes'] as $size) {
            DB::table('chain_prop_sizes')->insert([
                'chain_prop_id' => $chain_prop_id,
                'chain_size_id' => DB::table('chain_sizes')->where('value', $size)->first()->id,
                'quantity' => $item['props']['parameters']['quantity'],
                'price' => $item['props']['parameters']['price'],
                'created_at' => now(),
            ]);
        }

        if ($item['props']['parameters']['weaving']) {
            DB::table('chain_prop_weavings')->insert([
                'chain_prop_id' => $chain_prop_id,
                'weaving_id' => DB::table('weavings')->where('name', $item['props']['parameters']['weaving']['weaving'])->first()->id,
                'fullness' => $item['props']['parameters']['weaving']['fullness'],
                'wire_diameter' => $item['props']['parameters']['weaving']['wire_diameter'],
                'created_at' => now(),
            ]);
        }

        return $chain_prop_id;
    }

    private function getNecklaceProps(array $item, int $jewellery_id): int
    {
        $necklace_prop_id = DB::table('necklace_props')->insertGetId([
            'jewellery_id' => $jewellery_id,
            'created_at' => now(),
        ]);

        foreach ($item['props']['parameters']['necklace_sizes'] as $size) {
            DB::table('necklace_prop_sizes')->insert([
                'necklace_prop_id' => $necklace_prop_id,
                'necklace_size_id' => DB::table('necklace_sizes')->where('value', $size)->first()->id,
                'quantity' => $item['props']['parameters']['quantity'],
                'price' => $item['props']['parameters']['price'],
                'created_at' => now(),
            ]);
        }

        return $necklace_prop_id;
    }

    private function getRingProps(array $item, int $jewellery_id): int
    {
        $ring_prop_id = DB::table('ring_props')->insertGetId([
            'jewellery_id' => $jewellery_id,
            'dimensions' => json_encode($item['props']['parameters']['dimensions']),
            'created_at' => now(),
        ]);

        foreach ($item['props']['parameters']['ring_sizes'] as $size) {
            DB::table('ring_prop_sizes')->insert([
                'ring_prop_id' => $ring_prop_id,
                'ring_size_id' => DB::table('ring_sizes')->where('value', $size)->first()->id,
                'quantity' => $item['props']['parameters']['quantity'],
                'price' => $item['props']['parameters']['price'],
                'created_at' => now(),
            ]);
        }

        return $ring_prop_id;
    }

    private function getBroochProps(array $item, int $jewellery_id): int
    {
        return DB::table('brooch_props')->insertGetId([
            'jewellery_id' => $jewellery_id,
            'quantity' => $item['props']['parameters']['quantity'],
            'price' => $item['props']['parameters']['price'],
            'created_at' => now(),
        ]);
    }

    private function getTieClipProps(array $item, int $jewellery_id): int
    {
        return DB::table('tie_clip_props')->insertGetId([
            'jewellery_id' => $jewellery_id,
            'quantity' => $item['props']['parameters']['quantity'],
            'price' => $item['props']['parameters']['price'],
            'created_at' => now(),
        ]);
    }

    private function getCuffLinkProps(array $item, int $jewellery_id): int
    {
        return DB::table('cuff_link_props')->insertGetId([
            'jewellery_id' => $jewellery_id,
            'quantity' => $item['props']['parameters']['quantity'],
            'price' => $item['props']['parameters']['price'],
            'created_at' => now(),
        ]);
    }

    private function getPiercingProps(array $item, int $jewellery_id): int
    {
        return DB::table('piercing_props')->insertGetId([
            'jewellery_id' => $jewellery_id,
            'quantity' => $item['props']['parameters']['quantity'],
            'price' => $item['props']['parameters']['price'],
            'created_at' => now(),
        ]);
    }

    private function getPendantProps(array $item, int $jewellery_id): int
    {
        return DB::table('pendant_props')->insertGetId([
            'jewellery_id' => $jewellery_id,
            'quantity' => $item['props']['parameters']['quantity'],
            'price' => $item['props']['parameters']['price'],
            'created_at' => now(),
        ]);
    }

    private function getCharmPendantProps(array $item, int $jewellery_id): int
    {
        return DB::table('charm_pendant_props')->insertGetId([
            'jewellery_id' => $jewellery_id,
            'quantity' => $item['props']['parameters']['quantity'],
            'price' => $item['props']['parameters']['price'],
            'created_at' => now(),
        ]);
    }

    private function getEarringProps(array $item, int $jewellery_id): int
    {
        return DB::table('earring_props')->insertGetId([
            'jewellery_id' => $jewellery_id,
            'clasp_id' => DB::table('clasps')->where('name', $item['props']['parameters']['clasp'])->first()->id,
            'quantity' => $item['props']['parameters']['quantity'],
            'price' => $item['props']['parameters']['price'],
            'created_at' => now(),
        ]);
    }
}
