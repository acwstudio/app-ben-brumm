<?php

namespace Database\Seeders;

use Domain\Inserts\Models\Insert;
use Domain\Inserts\Models\InsertColour;
use Domain\Inserts\Models\InsertProperty;
use Domain\Inserts\Models\Stone;
use Domain\Jewelleries\Models\BraceletProp;
use Domain\PreciousMetals\Models\PrcsMetal;
use Domain\Site\BraceletPropView;
use Domain\Jewelleries\Models\Jewellery;
use Domain\Site\ChainPropView;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SQLRequestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
//        $vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U", " ");
//        $yourString = str_replace($vowels, "", 'tie clip');
        dd(Insert::find(2)->insertProperty);
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
