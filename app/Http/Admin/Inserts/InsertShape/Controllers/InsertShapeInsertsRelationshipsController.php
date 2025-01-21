<?php

declare(strict_types=1);

namespace App\Http\Admin\Inserts\InsertShape\Controllers;

use App\Http\Admin\Inserts\InsertShape\Requests\InsertShapeInsertsUpdateRelationsRequest;
use App\Http\Admin\Shared\Resources\Identifiers\ApiEntityIdentifierResource;
use App\Http\Shared\Controller;
use Domain\Inserts\InsertShape\Services\RelationServices\InsertShapeInsertsRelationsService;
use Illuminate\Http\JsonResponse;

final class InsertShapeInsertsRelationshipsController extends Controller
{
    public function __construct(public InsertShapeInsertsRelationsService $service)
    {
    }

    public function index(int $id): JsonResponse
    {
        $collection = $this->service->index($id);
        return ApiEntityIdentifierResource::collection($collection)->response();
    }

    public function update(InsertShapeInsertsUpdateRelationsRequest $request, int $id): JsonResponse
    {
        $data = $request->all();
        $this->service->update($data, $id);

        return response()->json(null, 204);
    }
}
