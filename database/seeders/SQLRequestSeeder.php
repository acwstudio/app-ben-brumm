<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SQLRequestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $result = DB::table('inserts')
            ->join('insert_details', 'inserts.id', '=', 'insert_details.insert_id')
            ->join('stones', 'insert_details.stone_id', '=', 'stones.id')
            ->join('shapes', 'insert_details.shape_id', '=', 'shapes.id')
            ->join('colours', 'insert_details.colour_id', '=', 'colours.id')
            ->join('types', 'stones.type_id', '=', 'types.id')
            ->select(
                'inserts.name',
                'stones.name as stone',
                'types.name as type',
                'shapes.name as shape',
                'colours.name as colour',
                'insert_details.quantity',
                'insert_details.carat',
                'insert_details.dimension'
            )
            ->get();
        dd($result);
    }
}
