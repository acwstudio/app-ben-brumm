<?php

namespace Database\Seeders;

use Domain\Jewelleries\Jewellery\Models\Jewellery;
use Domain\JewelleryProperties\Weaving\Models\Weaving;
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
//        dd(Weaving::find(6)->chainPropWeavings);
//        BraceletPropView::with(['braceletSizes'])->each(function (BraceletPropView $bracelet) {
//            dump($bracelet);
//        });
//        dd(json_encode(config('seeding-data.jewelleries'), JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
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
