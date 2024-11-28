<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InsertDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('insert_details')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
//        dd(json_encode(['диаметр' => '1 мм'], JSON_UNESCAPED_UNICODE));

        $insert_details = [
            [
                'position_into_group_id' => 1,
                'insert_id' => 1,
                'stone_id' => 2,
                'shape_id' => 9,
                'colour_id' => 12,
                'quantity' => 11,
                'carat' => 0.094,
                'dimension' => json_encode(['диаметр' => '1 мм'], JSON_UNESCAPED_UNICODE),
            ],
            [
                'position_into_group_id' => 2,
                'insert_id' => 1,
                'stone_id' => 2,
                'shape_id' => 9,
                'colour_id' => 12,
                'quantity' => 12,
                'carat' => 0.342,
                'dimension' => json_encode(['диаметр' => '1.5 мм'], JSON_UNESCAPED_UNICODE),
            ],
            [
                'position_into_group_id' => 1,
                'insert_id' => 2,
                'stone_id' => 2,
                'shape_id' => 9,
                'colour_id' => 12,
                'quantity' => 14,
                'carat' => 0.119,
                'dimension' => json_encode(['диаметр' => '1 мм'], JSON_UNESCAPED_UNICODE),
            ],
            [
                'position_into_group_id' => 1,
                'insert_id' => 2,
                'stone_id' => 3,
                'shape_id' => 9,
                'colour_id' => 5,
                'quantity' => 2,
                'carat' => 1.179,
                'dimension' => json_encode(['диаметр' => '5 мм'], JSON_UNESCAPED_UNICODE),
            ],
            [
                'position_into_group_id' => 1,
                'insert_id' => 3,
                'stone_id' => 2,
                'shape_id' => 9,
                'colour_id' => 12,
                'quantity' => 12,
                'carat' => 0.102,
                'dimension' => json_encode(['диаметр' => '1 мм'], JSON_UNESCAPED_UNICODE),
            ],
            [
                'position_into_group_id' => 1,
                'insert_id' => 3,
                'stone_id' => 5,
                'shape_id' => 3,
                'colour_id' => 2,
                'quantity' => 2,
                'carat' => 0.579,
                'dimension' => json_encode(['ширина' => '3 мм', 'высота' => '5 мм'], JSON_UNESCAPED_UNICODE),
            ],
            [
                'position_into_group_id' => 1,
                'insert_id' => 4,
                'stone_id' => 1,
                'shape_id' => 9,
                'colour_id' => 12,
                'quantity' => 3,
                'carat' => 0.011,
                'dimension' => json_encode(['диаметр' => 'менее 1 мм'], JSON_UNESCAPED_UNICODE),
            ],
            [
                'position_into_group_id' => 1,
                'insert_id' => 4,
                'stone_id' => 6,
                'shape_id' => 3,
                'colour_id' => 13,
                'quantity' => 1,
                'carat' => 1.078,
                'dimension' => json_encode(['ширина' => '6 мм', 'высота' => '8 мм'], JSON_UNESCAPED_UNICODE),
            ],
            [
                'position_into_group_id' => 1,
                'insert_id' => 5,
                'stone_id' => 7,
                'shape_id' => 5,
                'colour_id' => 8,
                'quantity' => 1,
                'carat' => 6.45,
                'dimension' => json_encode(['ширина' => '7 мм', 'высота' => '7.5 мм'], JSON_UNESCAPED_UNICODE),
            ],
        ];

        foreach ($insert_details as $insert_detail) {
            DB::table('insert_details')->insert([
                'position_into_group_id' => $insert_detail['position_into_group_id'],
                'insert_id' => $insert_detail['insert_id'],
                'stone_id' => $insert_detail['stone_id'],
                'shape_id' => $insert_detail['shape_id'],
                'colour_id' => $insert_detail['colour_id'],
                'quantity' => $insert_detail['quantity'],
                'carat' => $insert_detail['carat'],
                'dimension' => $insert_detail['dimension'],
                'created_at' => now(),
            ]);
        }
    }
}
