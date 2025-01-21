<?php

declare(strict_types=1);

namespace App\Http\Admin\Inserts\InsertShape\Controllers;

use App\Http\Admin\Jewelleries\Jewellery\Resources\JewelleryCollection;
use Domain\Inserts\InsertShape\Services\RelationServices\InsertShapeJewelleriesRelationsService;
use Illuminate\Http\JsonResponse;

final class InsertShapesJewelleriesRelatedController
{
    public function __construct(public InsertShapeJewelleriesRelationsService $service)
    {
    }

    public function index(int $id): JsonResponse
    {
        $collection = $this->service->index($id);

        return (new JewelleryCollection($collection))->response();
    }
}
