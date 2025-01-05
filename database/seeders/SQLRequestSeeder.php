<?php

namespace Database\Seeders;

use Domain\Jewelleries\Models\Jewellery;
use Domain\JewelleryProperties\Models\BraceletProp;
use Domain\JewelleryProperties\Models\BraceletPropSize;
use Domain\JewelleryProperties\Models\BraceletSize;
use Domain\JewelleryProperties\Models\Weaving;
use Illuminate\Database\Seeder;

class SQLRequestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
//        $vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U", " ");
//        $yourString = str_replace($vowels, "", 'tie clip');
//        dd(Jewellery::find(2)->braceletProp);
        dd(Weaving::find(6)->chainPropWeavings);
//        BraceletPropView::with(['braceletSizes'])->each(function (BraceletPropView $bracelet) {
//            dump($bracelet);
//        });
//        dd(Jewellery::find(2)->braceletPropView);
        Jewellery::with(['braceletPropView'])->each(function (Jewellery $bracelet) {
            dump($bracelet);
        });
//        dd(BraceletPropView::with(['braceletSizes','braceletPrices'])->get());
//        dd(ChainPropView::with(['chainSizes','chainPrices'])->get());
//        dd(DB::table('chain_prop_views')->get());
//        dd(DB::table('jewellery_bracelets')->where('weave','бисмарк')->get());
    }
}
