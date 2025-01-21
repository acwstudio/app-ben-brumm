<?php

declare(strict_types=1);

namespace App\Http\Admin\Inserts\InsertColour\Controllers;

use App\Http\Admin\Jewelleries\Jewellery\Resources\JewelleryCollection;
use Domain\Inserts\InsertColour\Models\InsertColour;
use Domain\Inserts\InsertColour\Services\RelationServices\InsertColoursJewelleriesRelationsService;
use Illuminate\Http\JsonResponse;

final class InsertColoursJewelleriesRelatedController
{
    public function __construct(public InsertColoursJewelleriesRelationsService $service)
    {
    }

    public function index(int $id): JsonResponse
    {
        $collection = $this->service->index($id);
        return (new JewelleryCollection($collection))->response();
    }
}
