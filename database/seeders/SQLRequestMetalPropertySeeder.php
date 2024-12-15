<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use function Laravel\Prompts\select;

class SQLRequestMetalPropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $properties = DB::table('prcs_metal_properties')
            ->join('samples', 'prcs_metal_properties.sample_id', '=', 'samples.id')
            ->join('prcs_metals', 'prcs_metal_properties.prcs_metal_id', '=', 'prcs_metals.id')
            ->join('prcs_metal_colours', 'prcs_metal_properties.prcs_metal_colour_id', '=', 'prcs_metal_colours.id')
            ->join('prcs_coverages', 'prcs_metal_properties.prcs_coverage_id', '=', 'prcs_coverages.id')
            ->select(
                'prcs_metal_properties.id',
                'samples.value as sample',
                'prcs_metals.name as metal',
                'prcs_metal_colours.name as colour',
                'prcs_coverages.name as coverage',
            )
            ->get();

        dd($properties);
    }
}
