<?php

declare(strict_types=1);

namespace App\Http\Admin\Inserts\Stone\Controllers;

use App\Http\Admin\Shared\Resources\Identifiers\ApiEntityIdentifierResource;
use Domain\Inserts\Stone\Services\RelationServices\StonesJewelleriesRelationsService;

final class StonesJewelleriesRelationshipsController
{
    public function __construct(public StonesJewelleriesRelationsService $service)
    {
    }

    public function index(int $id): \Illuminate\Http\JsonResponse
    {
        $collection = $this->service->index($id);

        return ApiEntityIdentifierResource::collection($collection)->response();
    }
}
