<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class StoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('stones')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $stones = config('seeding-data.stones.stones');

        foreach ($stones as $key => $stone) {

            DB::table('stones')->insert([
                'stone_type_id' => $stone['stone_type_id'],
                'name' => $stone['name'],
                'description' => $stone['description'],
                'slug' => Str::slug($stone['name'], '-'),
                'is_active' => 1,
                'is_natural' => $stone['is_natural'],
                'created_at' => now(),
            ]);
        }
    }
}
