<?php

namespace Database\Seeders;

use Domain\Jewelleries\JewelleryCategory\Enums\JewelleryCategoryEnum;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $test = JewelleryCategoryEnum::from('серьги')->categoryID();
        dd($test);
    }
}
