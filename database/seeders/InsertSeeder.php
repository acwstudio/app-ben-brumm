<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class InsertSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('inserts')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $inserts = [
            [
                'stone_id' => 2,
                'insert_colour_id' => 12,
                'insert_shape_id' => 9,
            ],
            [
                'stone_id' => 3,
                'insert_colour_id' => 5,
                'insert_shape_id' => 9,
            ],
            [
                'stone_id' => 5,
                'insert_colour_id' => 2,
                'insert_shape_id' => 3,
            ],
            [
                'stone_id' => 6,
                'insert_colour_id' => 13,
                'insert_shape_id' => 3,
            ],
            [
                'stone_id' => 1,
                'insert_colour_id' => 12,
                'insert_shape_id' => 9,
            ],
            [
                'stone_id' => 7,
                'insert_colour_id' => 8,
                'insert_shape_id' => 5,
            ],
            [
                'stone_id' => 8,
                'insert_colour_id' => 9,
                'insert_shape_id' => 9,
            ],
            [
                'stone_id' => 9,
                'insert_colour_id' => 1,
                'insert_shape_id' => 9,
            ],
            [
                'stone_id' => 10,
                'insert_colour_id' => 14,
                'insert_shape_id' => 9,
            ],
        ];

        foreach ($inserts as $insert) {
            DB::table('inserts')->insert([
                'stone_id' => $insert['stone_id'],
                'insert_colour_id' => $insert['insert_colour_id'],
                'insert_shape_id' => $insert['insert_shape_id'],
                'created_at' => now(),
            ]);
        }
    }
}
