<?php

namespace Database\Seeders;

use Domain\Views\InsertViews\Models\InsertView;
use Domain\Views\JewelleryViews\Models\JewelleryView;
use Illuminate\Database\Seeder;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
//        $test = JewelleryCategoryEnum::from('серьги')->categoryID();
//        $jewelleryPropViewIds = Discount::find(4)->jewelleries->first;
//        $jewellery = JewelleryView::where('jewellery_id', 27)->first()->discounts()->first();
//        dd($jewellery);
        dd(InsertView::find(14)->jewelleryView);
    }
}
