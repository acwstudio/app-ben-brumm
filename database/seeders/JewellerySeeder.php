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
                'created_at' => now(),
            ]);
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
