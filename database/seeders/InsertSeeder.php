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

        $inserts = config('seeding-data.inserts.inserts');

        foreach ($inserts as $insert) {
            DB::table('inserts')->insert([
                'stone_id' => $insert['stone_id'],
                'insert_colour_id' => $insert['insert_colour_id'],
                'insert_shape_id' => $insert['insert_shape_id'],
                'created_at' => now(),
            ]);
        }
    }
}
