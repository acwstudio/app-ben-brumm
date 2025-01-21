<?php

declare(strict_types=1);

namespace App\Http\Admin\Inserts\InsertShape\Controllers;

use App\Http\Admin\Shared\Resources\Identifiers\ApiEntityIdentifierResource;
use Domain\Inserts\InsertShape\Services\RelationServices\InsertShapeJewelleriesRelationsService;
use Illuminate\Http\JsonResponse;

final class InsertShapesJewelleriesRelationshipsController
{
    public function __construct(public InsertShapeJewelleriesRelationsService $service)
    {
    }

    public function index(int $id): JsonResponse
    {
        $collection = $this->service->index($id);
        return ApiEntityIdentifierResource::collection($collection)->response();
    }
}
