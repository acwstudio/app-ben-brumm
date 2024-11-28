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
                'name' => 'Серебряное наборное кольцо с фианитами',
                'description' => 'Вставка из 11 фианитов по 0.094 карат диаметром 1 мм и из 12 фианитов по 0.342 карат и диаметром 1,5 мм',
            ],
            [
                'name' => 'Серьги из золота с топазами и фианитами',
                'description' => 'Вставка из 14 фианитов по 0.119 карат диаметром 1 мм и из 2 топазов по 1,179 карат и диаметром 5 мм',
            ],
            [
                'name' => 'Серьги из золота с гранатами и фианитами',
                'description' => 'Вставка из 12 фианитов по 0.102 карат диаметром 1 мм и из 2 гранатов по 0.579 карат шириной 3 мм и высотой 5 мм',
            ],
            [
                'name' => 'Серьги из золота с жемчугом',
                'description' => 'Вставка из 2 жемчужин по 6.45 карат шириной 7 мм и высотой 7,5 мм',
            ],
            [
                'name' => 'Подвеска из золота с бриллиантами и аметистом',
                'description' => 'Вставка из 3 бриллиантов по 0.011 карат и из 1 фметиста 1.078 карат шириной 8 мм и высотой 6 мм',
            ],
        ];

        foreach ($inserts as $insert) {
            DB::table('inserts')->insert([
                'name' => $insert['name'],
                'description' => $insert['description'],
                'slug' => Str::slug($insert['name'], '-'),
                'is_active' => 1,
                'created_at' => now(),
            ]);
        }
    }
}
