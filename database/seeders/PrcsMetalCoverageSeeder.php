<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PrcsMetalCoverageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('prcs_metal_coverages')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $coverages = [
            'золочение','родирование','без покрытия'
        ];

        foreach ($coverages as $coverage) {
            DB::table('prcs_metal_coverages')->insert([
                'name' => $coverage,
                'slug' =>Str::slug('coverage'),
                'is_active' => 1,
                'created_at' => now(),
            ]);
        }
    }
}
