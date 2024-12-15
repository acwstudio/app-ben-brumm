<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrcsMetalPropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('prcs_metal_properties')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $properties = [
            [
                'prcs_metal_id' => 2,
                'sample_id' => 11,
                'prcs_metal_colour_id' => 5,
                'prcs_coverage_id' => 2,
            ],
            [
                'prcs_metal_id' => 1,
                'sample_id' => 3,
                'prcs_metal_colour_id' => 3,
                'prcs_coverage_id' => 2,
            ],
            [
                'prcs_metal_id' => 1,
                'sample_id' => 3,
                'prcs_metal_colour_id' => 5,
                'prcs_coverage_id' => 3,
            ],
            [
                'prcs_metal_id' => 2,
                'sample_id' => 11,
                'prcs_metal_colour_id' => 5,
                'prcs_coverage_id' => 1,
            ],
        ];

        foreach ($properties as $property) {
            DB::table('prcs_metal_properties')->insert([
                'prcs_metal_id' => $property['prcs_metal_id'],
                'sample_id' => $property['sample_id'],
                'prcs_metal_colour_id' => $property['prcs_metal_colour_id'],
                'prcs_coverage_id' => $property['prcs_coverage_id'],
                'created_at' => now(),
            ]);
        }
    }
}
