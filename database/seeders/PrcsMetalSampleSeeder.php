<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrcsMetalSampleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('prcs_metal_samples')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $samples = config('seeding-data.precious-metals.prcs-metal-samples');

        foreach ($samples as $sample) {
            DB::table('prcs_metal_samples')->insert([
                'value' => $sample,
                'is_active' => true,
                'created_at' => now(),
            ]);
        }
    }
}
