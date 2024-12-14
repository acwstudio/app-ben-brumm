<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InsertPropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('insert_properties')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $inserts = [
            [
                'quantity' => 11,
                'weight' => 0.094,
                'weight_unit' => 'карат',
                'dimensions' => [
                    'диаметр' => '1 мм'
                ]
            ],
            [
                'quantity' => 12,
                'weight' => 0.342,
                'weight_unit' => 'карат',
                'dimensions' => [
                    'диаметр' => '1.5 мм'
                ]
            ],
            [
                'quantity' => 2,
                'weight' => 1.179,
                'weight_unit' => 'карат',
                'dimensions' => [
                    'диаметр' => '5 мм'
                ]
            ],
            [
                'quantity' => 14,
                'weight' => 0.119,
                'weight_unit' => 'карат',
                'dimensions' => [
                    'диаметр' => '1 мм'
                ]
            ],
            [
                'quantity' => 2,
                'weight' => 0.579,
                'weight_unit' => 'карат',
                'dimensions' => [
                    'высота' => '5 мм',
                    'ширина' => '3 мм'
                ]
            ],
            [
                'quantity' => 12,
                'weight' => 0.102,
                'weight_unit' => 'карат',
                'dimensions' => [
                    'диаметр' => '1 мм'
                ]
            ],
            [
                'quantity' => 1,
                'weight' => 1.078,
                'weight_unit' => 'карат',
                'dimensions' => [
                    'высота' => '8 мм',
                    'ширина' => '6 мм'
                ]
            ],
            [
                'quantity' => 3,
                'weight' => 0.011,
                'weight_unit' => 'карат',
                'dimensions' => [
                    'диаметр' => '< 1 мм'
                ]
            ],
            [
                'quantity' => 1,
                'weight' => 6.45,
                'weight_unit' => 'карат',
                'dimensions' => [
                    'высота' => '7 мм',
                    'ширина' => '7.5 мм'
                ]
            ],
            [
                'quantity' => 1,
                'weight' => 4.074,
                'weight_unit' => 'карат',
                'dimensions' => [
                    'диаметр' => '8 мм'
                ]
            ],
            [
                'quantity' => 1,
                'weight' => 13.927,
                'weight_unit' => 'карат',
                'dimensions' => [
                    'диаметр' => '12 мм'
                ]
            ],
            [
                'quantity' => 10,
                'weight' => 0.059,
                'weight_unit' => 'карат',
                'dimensions' => [
                    'диаметр' => '< 1 мм'
                ]
            ],
            [
                'quantity' => 1,
                'weight' => 9.9,
                'weight_unit' => 'карат',
                'dimensions' => [
                    'диаметр' => '16 мм'
                ]
            ],
        ];

        foreach ($inserts as $insert) {
            DB::table('insert_properties')->insert([
                'quantity' => $insert['quantity'],
                'weight' => $insert['weight'],
                'weight_unit' => $insert['weight_unit'],
                'dimensions' => json_encode($insert['dimensions']),
                'created_at' => now(),
            ]);
        }
    }
}
