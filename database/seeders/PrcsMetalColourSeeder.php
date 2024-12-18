<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PrcsMetalColourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('prcs_metal_colours')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $colours = config('seeding-data.precious-metals.prcs-metal-colours');

        foreach ($colours as $colour) {
            DB::table('prcs_metal_colours')->insert([
                'name' => $colour,
                'slug' =>Str::slug($colour),
                'is_active' => 1,
                'created_at' => now(),
            ]);
        }
    }
}
