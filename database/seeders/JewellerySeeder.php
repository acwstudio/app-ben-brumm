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

        $items = config('seeding-data.inserts.jewelleries');

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
