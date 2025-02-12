<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DiscountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
//        dd(DB::table('jewelleries')->get('id')->random(3));
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('discounts')->truncate();
        DB::table('discount_jewellery')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $discounts = config('seeding-data.discounts.promotion');
        $items = DB::table('jewelleries')->get('id');

        foreach ($discounts as $discount) {
            $discountId = DB::table('discounts')->insertGetId([
                'name' => $discount['name'],
                'slug' =>Str::slug($discount['name'], '-'),
                'rate' => $discount['rate'],
                'start' => $discount['start'],
                'end' => $discount['end'],
                'is_active' => 1,
                'created_at' => now(),
            ]);

//            foreach ($items as $item) {
//                DB::table('discount_jewellery')->insert([
//                    'jewellery_id' => $item->id,
//                    'discount_id' => $discountId,
//                ]);
//            }

        }

        foreach ($items as $item) {
            DB::table('discount_jewellery')->insert([
                'jewellery_id' => $item->id,
                'discount_id' => DB::table('discounts')->get('id')->random()->id,
            ]);
        }

    }
}
