<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PositionIntoGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('position_into_groups')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $positions = [
            [
                1, 'Порядковый номер 1 в группе одинаковых позиций для обеспечения уникальности',
            ],
            [
                2, 'Порядковый номер 2 в группе одинаковых позиций для обеспечения уникальности',
            ],
            [
                3, 'Порядковый номер 3 в группе одинаковых позиций для обеспечения уникальности',
            ]
        ];

        foreach ($positions as $position) {
            DB::table('position_into_groups')->insert([
                'position' => $position[0],
                'description' => $position[1],
                'created_at' => now(),
            ]);
        }
    }
}
