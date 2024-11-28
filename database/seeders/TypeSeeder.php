<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('types')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $types = ['драгоценные', 'полудрагоценные', 'поделочные'];

        foreach ($types as $type) {
            DB::table('types')->insert([
                'name' => $type,
                'description' => 'Камень относится к типу - ' . $type,
                'slug' => Str::slug($type, '-'),
                'is_active' => true,
                'created_at' => now(),
            ]);
        }
    }
}
