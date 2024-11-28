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

        $preciousType = DB::table('types')->where('name', 'драгоценные')->value('id');
        $semipreciousType = DB::table('types')->where('name', 'полудрагоценные')->value('id');
        $ornamentalType = DB::table('types')->where('name', 'поделочные')->value('id');
//        dd($ornamentalType);
        $stones = [
            [
                'type_id' => $preciousType,
                'name' => 'бриллиант',
                'description' => 'Бриллиант натуральный драгоценный камень',
                'is_nature' => 1,
            ],
            [
                'type_id' => $preciousType,
                'name' => 'фианит',
                'description' => 'Фианит - искусственно выращенный бриллиант',
                'is_nature' => 0,
            ],
            [
                'type_id' => $semipreciousType,
                'name' => 'топаз',
                'description' => 'Топаз это натуральный полудрагоценный камень',
                'is_nature' => 1,
            ],
            [
                'type_id' => $preciousType,
                'name' => 'сапфир',
                'description' => 'Сапфир это натуральный драгоценный камень',
                'is_nature' => 1,
            ],
            [
                'type_id' => $semipreciousType,
                'name' => 'гранат',
                'description' => 'Гранат это натуральный полудрагоценный камень',
                'is_nature' => 1,
            ],
            [
                'type_id' => $semipreciousType,
                'name' => 'аметист',
                'description' => 'Аметист это натуральный полудрагоценный камень',
                'is_nature' => 1,
            ],
            [
                'type_id' => $preciousType,
                'name' => 'жемчуг',
                'description' => 'Жемчуг это натуральный драгоценный камень',
                'is_nature' => 1,
            ]
        ];

        foreach ($stones as $key => $stone) {
//            dd($stone);
            DB::table('stones')->insert([
                'type_id' => $stone['type_id'],
                'name' => $stone['name'],
                'description' => $stone['description'],
                'slug' => Str::slug($stone['name'], '-'),
                'is_active' => 1,
                'is_nature' => $stone['is_nature'],
                'created_at' => now(),
            ]);
        }
    }
}
