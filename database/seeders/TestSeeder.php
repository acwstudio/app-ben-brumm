<?php

namespace Database\Seeders;

use Domain\Discounts\Discount\Models\Discount;
use Domain\Jewelleries\JewelleryCategory\Enums\JewelleryCategoryEnum;
use Domain\Site\JewelleryPropView;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
//        $test = JewelleryCategoryEnum::from('серьги')->categoryID();
//        $jewelleryPropViewIds = Discount::find(4)->jewelleries->first;
        $jewellery = JewelleryPropView::where('jewellery_id', 27)->first()->discounts()->first();
        dd($jewellery);
//        dd(JewelleryPropView::find(14)->shockPrice->price);
    }
}
