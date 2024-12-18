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

        $properties = config('seeding-data.precious-metals.prcs-metal-properties');

        foreach ($properties as $property) {
            DB::table('prcs_metal_properties')->insert([
                'prcs_metal_id' => $property['prcs_metal_id'],
                'prcs_metal_sample_id' => $property['prcs_metal_sample_id'],
                'prcs_metal_colour_id' => $property['prcs_metal_colour_id'],
                'prcs_metal_coverage_id' => $property['prcs_metal_coverage_id'],
                'created_at' => now(),
            ]);
        }
    }
}
