<?php

namespace Database\Seeders;

use App\Models\Insert;
use App\Models\Stone;
use App\Models\Type;
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
//        dd(Insert::all());
//        $result = Insert::join('stones', 'inserts.stone_id', '=', 'stones.id')
//            ->join('insert_colours', 'inserts.insert_colour_id', '=', 'insert_colours.id')
//            ->join('insert_shapes', 'inserts.insert_shape_id', '=', 'insert_shapes.id')
//            ->join('stone_types', 'stones.stone_type_id', '=', 'stone_types.id')
//            ->select(
//                'inserts.id',
//                'stones.name as stone',
//                'stone_types.name as type',
//                'insert_shapes.name as shape',
//                'insert_colours.name as colour',
//            )
//            ->get();

//        $result = DB::table('inserts')
//            ->join('stones', 'inserts.stone_id', '=', 'stones.id')
//            ->join('insert_colours', 'inserts.insert_colour_id', '=', 'insert_colours.id')
//            ->join('insert_shapes', 'inserts.insert_shape_id', '=', 'insert_shapes.id')
//            ->join('stone_types', 'stones.stone_type_id', '=', 'stone_types.id')
//            ->select(
//                'inserts.id',
//                'stones.name as stone',
//                'stone_types.name as type',
//                'insert_shapes.name as shape',
//                'insert_colours.name as colour',
//            )
//            ->get();

        $result = DB::table('jewelleries')
            ->join('insert_jewellery', 'jewelleries.id', '=', 'insert_jewellery.jewellery_id')
            ->join('inserts', 'insert_jewellery.insert_id', '=', 'inserts.id')
            ->join('insert_properties', 'insert_properties.id', '=', 'insert_jewellery.insert_property_id')
            ->join('stones', 'stones.id', '=', 'inserts.stone_id')
            ->join('insert_shapes', 'insert_shapes.id', '=', 'inserts.insert_shape_id')
            ->join('insert_colours', 'insert_colours.id', '=', 'inserts.insert_colour_id')
            ->join('stone_types', 'stone_types.id', '=', 'stones.stone_type_id')
            ->select(
                'jewelleries.id as jewellery_id', 'jewelleries.name as jewellery',
                'insert_jewellery.id as insert_id',
                'stones.name as insert', 'insert_shapes.name as shape', 'insert_colours.name as colour', 'stone_types.name as stone_type',
                'insert_properties.quantity','insert_properties.weight','insert_properties.weight_unit','insert_properties.dimensions',
            )
            ->orderBy('insert_jewellery.id')
            ->get();

        foreach ($result as $item) {
            dump($item);
        }
//        dd($result->toArray());
    }
}
