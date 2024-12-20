<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CoverageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('coverages')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $coverages = config('seeding-data.precious-metals.coverages');

        foreach ($coverages as $coverage) {
            DB::table('coverages')->insert([
                'name' => $coverage,
                'slug' =>Str::slug($coverage, '-'),
                'is_active' => 1,
                'created_at' => now(),
            ]);
        }
    }
}
