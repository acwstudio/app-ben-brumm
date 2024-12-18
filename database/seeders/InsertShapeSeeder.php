<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class InsertShapeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('insert_shapes')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $shapes = config('seeding-data.inserts.shapes');

        foreach ($shapes as $shape) {
            DB::table('insert_shapes')->insert([
                'name'        => $shape,
                'description' => 'Камень имеет форму - ' . $shape,
                'slug'        => Str::slug($shape, '-'),
                'is_active'   => true,
                'created_at'  => now(),
            ]);
        }
    }
}
