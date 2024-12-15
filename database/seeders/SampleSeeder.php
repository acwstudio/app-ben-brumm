<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SampleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('samples')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $samples = [
            '375','500','585','750','875','916','958','999','800','830','925','960','850','900','950'
        ];

        foreach ($samples as $sample) {
            DB::table('samples')->insert([
                'value' => $sample,
                'is_active' => true,
                'created_at' => now(),
            ]);
        }
    }
}
