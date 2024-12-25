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
        DB::table('weavings')->truncate();
        DB::table('bracelet_sizes')->truncate();
        DB::table('chain_sizes')->truncate();
        DB::table('ring_sizes')->truncate();
        DB::table('necklace_sizes')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $categories = config('seeding-data.jewelleries.jewellery-categories');
        $weaves = config('seeding-data.jewelleries.weavings');
        $ring_sizes = config('seeding-data.jewelleries.ring_sizes');
        $bracelet_sizes = config('seeding-data.jewelleries.bracelet_sizes');
        $chain_sizes = config('seeding-data.jewelleries.chain_sizes');
        $necklace_sizes = config('seeding-data.jewelleries.necklace_sizes');

        foreach ($weaves as $weave) {
            DB::table('weavings')->insert([
                'name' => $weave,
                'created_at' => now(),
            ]);
        }

        foreach ($ring_sizes as $ring_size) {
            DB::table('ring_sizes')->insert([
                'value' => $ring_size['value'],
                'created_at' => now(),
            ]);
        }

        foreach ($chain_sizes as $chain_size) {
            DB::table('chain_sizes')->insert([
                'value' => $chain_size['value'],
                'created_at' => now(),
            ]);
        }

        foreach ($bracelet_sizes as $bracelet_size) {
            DB::table('bracelet_sizes')->insert([
                'value' => $bracelet_size['value'],
                'created_at' => now(),
            ]);
        }

        foreach ($necklace_sizes as $necklace_size) {
            DB::table('necklace_sizes')->insert([
                'value' => $necklace_size['value'],
                'created_at' => now(),
            ]);
        }

        foreach ($categories as $category) {
            DB::table('jewellery_categories')->insert([
                'name' => $category['name'],
                'category_code' => $this->getCategoryCode($category['category-code']),
                'slug' => Str::slug($category['name'], '-'),
                'created_at' => now(),
            ]);
        }
    }

    private function getCategoryCode(string $categoryName): string
    {
        $vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U", " ");

        return $yourString = str_replace($vowels, "", $categoryName);
    }
}
