<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ShapeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('shapes')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $forms = [
            'квадратный кушон', 'кушон', 'овал', 'радиант', 'груша', 'ашер', 'сердце', 'изумрудная', 'круг', 'триллион', 'кабашон'
        ];

        foreach ($forms as $form) {
            DB::table('shapes')->insert([
                'name'        => $form,
                'description' => 'Камень имеет форму - ' . $form,
                'slug'        => Str::slug($form, '-'),
                'is_active'   => true,
                'created_at'  => now(),
            ]);
        }
    }
}
