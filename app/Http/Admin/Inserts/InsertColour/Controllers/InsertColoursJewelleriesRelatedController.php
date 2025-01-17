<?php

declare(strict_types=1);

namespace App\Http\Admin\Inserts\InsertColour\Controllers;

use App\Http\Admin\Jewelleries\Jewellery\Resources\JewelleryCollection;
use Domain\Inserts\InsertColour\Models\InsertColour;
use Illuminate\Http\JsonResponse;

final class InsertColoursJewelleriesRelatedController
{
    public function index(int $id): JsonResponse
    {
        $model = InsertColour::findOrFail($id)->jewelleries;
        return (new JewelleryCollection($model))->response();
    }
}
