<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class StoneTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('stone_types')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $types = config('seeding-data.stones.stone-types');

        foreach ($types as $type) {
            DB::table('stone_types')->insert([
                'name' => $type,
                'description' => 'Камень относится к типу - ' . $type,
                'slug' => Str::slug($type, '-'),
                'is_active' => true,
                'created_at' => now(),
            ]);
        }
    }
}
