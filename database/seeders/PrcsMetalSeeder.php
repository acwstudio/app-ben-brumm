<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PrcsMetalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('prcs_metals')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $metals = [
            'золото','серебро','платина','палладий'
        ];

        foreach ($metals as $metal) {
            DB::table('prcs_metals')->insert([
                'name' => $metal,
                'slug' =>Str::slug($metal),
                'is_active' => 1,
                'created_at' => now(),
            ]);
        }
    }
}
