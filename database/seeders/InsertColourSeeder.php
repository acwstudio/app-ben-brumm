<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class InsertColourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('insert_colours')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        $colours = config('seeding-data.inserts.colours');

        foreach ($colours as $colour) {
            DB::table('insert_colours')->insert([
                'name' => $colour,
                'description' => 'Цвет камня - ' . $colour,
                'slug' => Str::slug($colour, '-'),
                'created_at' => now(),
                'is_active' => 1
            ]);
        }
    }
}
