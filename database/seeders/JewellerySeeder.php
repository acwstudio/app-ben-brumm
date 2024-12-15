<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JewellerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('jewelleries')->truncate();
        DB::table('insert_jewellery')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $items = [
            [
                'name' => 'Серебряное наборное кольцо с фианитами',
                'part_number' => '94011705',
                'prcs_metal_property_id' => 1,
                'insert-jewellery' => [
                    [
                        'jewellery_id' => '1',
                        'insert_id' => '1',
                        'insert_property_id' => '1',
                    ],
                    [
                        'jewellery_id' => '1',
                        'insert_id' => '1',
                        'insert_property_id' => '2',
                    ],
                ]
            ],
            [
                'name' => 'Серьги из золота с топазами и фианитами',
                'part_number' => '727533',
                'prcs_metal_property_id' => 2,
                'insert-jewellery' => [
                    [
                        'jewellery_id' => '2',
                        'insert_id' => '2',
                        'insert_property_id' => '3',
                    ],
                    [
                        'jewellery_id' => '2',
                        'insert_id' => '1',
                        'insert_property_id' => '4',
                    ],
                ]
            ],
            [
                'name' => 'Серьги из золота с гранатами и фианитами',
                'part_number' => '728331',
                'prcs_metal_property_id' => 2,
                'insert-jewellery' => [
                    [
                        'jewellery_id' => '3',
                        'insert_id' => '3',
                        'insert_property_id' => '5',
                    ],
                    [
                        'jewellery_id' => '3',
                        'insert_id' => '1',
                        'insert_property_id' => '6',
                    ],
                ]
            ],
            [
                'name' => 'Подвеска из золота с бриллиантами и аметистом',
                'part_number' => '73-00124',
                'prcs_metal_property_id' => 3,
                'insert-jewellery' => [
                    [
                        'jewellery_id' => '4',
                        'insert_id' => '4',
                        'insert_property_id' => '7',
                    ],
                    [
                        'jewellery_id' => '4',
                        'insert_id' => '5',
                        'insert_property_id' => '8',
                    ],
                ]
            ],
            [
                'name' => 'Серьги из золота с жемчугом',
                'part_number' => '792410',
                'prcs_metal_property_id' => 3,
                'insert-jewellery' => [
                    [
                        'jewellery_id' => '5',
                        'insert_id' => '6',
                        'insert_property_id' => '9',
                    ]
                ]
            ],
            [
                'name' => 'Серьги из золочёного серебра с агатами и малахитами',
                'part_number' => '83020096',
                'prcs_metal_property_id' => 4,
                'insert-jewellery' => [
                    [
                        'jewellery_id' => '6',
                        'insert_id' => '7',
                        'insert_property_id' => '10',
                    ],
                    [
                        'jewellery_id' => '6',
                        'insert_id' => '8',
                        'insert_property_id' => '11',
                    ],
                ]
            ],
            [
                'name' => 'Серьги из золота с бриллиантами и камеей',
                'part_number' => '6024257',
                'prcs_metal_property_id' => 2,
                'insert-jewellery' => [
                    [
                        'jewellery_id' => '7',
                        'insert_id' => '5',
                        'insert_property_id' => '12',
                    ],
                    [
                        'jewellery_id' => '7',
                        'insert_id' => '9',
                        'insert_property_id' => '13',
                    ],
                ]
            ],
            [
                'name' => 'Брошь из золота с гранатами',
                'part_number' => '740109',
                'prcs_metal_property_id' => 3,
                'insert-jewellery' => [
                    [
                        'jewellery_id' => '8',
                        'insert_id' => '3',
                        'insert_property_id' => '14',
                    ],
                    [
                        'jewellery_id' => '8',
                        'insert_id' => '10',
                        'insert_property_id' => '15',
                    ],
                ]
            ],
        ];

        foreach ($items as $item) {
            DB::table('jewelleries')->insert([
                'prcs_metal_property_id' => $item['prcs_metal_property_id'],
                'name' => $item['name'],
                'part_number' => $item['part_number'],
                'created_at' => now(),
            ]);
            if ($item['insert-jewellery']) {
                foreach ($item['insert-jewellery'] as $jewellery) {
                    DB::table('insert_jewellery')->insert([
                        'jewellery_id' => $jewellery['jewellery_id'],
                        'insert_id' => $jewellery['insert_id'],
                        'insert_property_id' => $jewellery['insert_property_id'],
                    ]);
                }
            }
        }
    }
}
