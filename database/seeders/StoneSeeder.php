<?php

namespace Database\Seeders;

use App\Models\Stone;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        $preciousType = DB::table('stone_types')->where('name', 'драгоценные')->value('id');
        $semipreciousType = DB::table('stone_types')->where('name', 'полудрагоценные')->value('id');
        $ornamentalType = DB::table('stone_types')->where('name', 'поделочные')->value('id');
//        dd($ornamentalType);
        $stones = [
            [
                'stone_type_id' => $preciousType,
                'name' => 'бриллиант',
                'description' => 'Бриллиант натуральный драгоценный камень',
                'is_natural' => 1,
            ],
            [
                'stone_type_id' => $preciousType,
                'name' => 'фианит',
                'description' => 'Фианит - искусственно выращенный бриллиант',
                'is_natural' => 0,
            ],
            [
                'stone_type_id' => $semipreciousType,
                'name' => 'топаз',
                'description' => 'Топаз это натуральный полудрагоценный камень',
                'is_natural' => 1,
            ],
            [
                'stone_type_id' => $preciousType,
                'name' => 'сапфир',
                'description' => 'Сапфир это натуральный драгоценный камень',
                'is_natural' => 1,
            ],
            [
                'stone_type_id' => $semipreciousType,
                'name' => 'гранат',
                'description' => 'Гранат это натуральный полудрагоценный камень',
                'is_natural' => 1,
            ],
            [
                'stone_type_id' => $semipreciousType,
                'name' => 'аметист',
                'description' => 'Аметист это натуральный полудрагоценный камень',
                'is_natural' => 1,
            ],
            [
                'stone_type_id' => $preciousType,
                'name' => 'жемчуг',
                'description' => 'Жемчуг это натуральный драгоценный камень',
                'is_natural' => 1,
            ],
            [
                'stone_type_id' => $ornamentalType,
                'name' => 'агат',
                'description' => 'Агат это натуральный поделочный камень',
                'is_natural' => 1,
            ],
            [
                'stone_type_id' => $ornamentalType,
                'name' => 'малахит',
                'description' => 'Малахит это натуральный поделочный камень',
                'is_natural' => 1,
            ],
            [
                'stone_type_id' => $semipreciousType,
                'name' => 'камея',
                'description' => 'Камея это натуральный резной полудрагоценный камень',
                'is_natural' => 1,
            ],
        ];

        foreach ($stones as $key => $stone) {
//            dd($stone);
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
