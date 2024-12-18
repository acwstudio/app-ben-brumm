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

        $inserts = config('seeding-data.inserts.insert-properties');

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
