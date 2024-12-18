<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class JewelleryCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('jewellery_categories')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $categories = config('seeding-data.jewelleries.jewellery-categories');

        foreach ($categories as $category) {
            DB::table('jewellery_categories')->insert([
                'name' => $category,
                'slug' => Str::slug($category, '-'),
                'created_at' => now(),
            ]);
        }
    }
}
