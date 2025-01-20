<?php

declare(strict_types=1);

namespace App\Http\Admin\Inserts\Insert\Controllers;

use App\Http\Admin\Inserts\Insert\Requests\InsertsInsertShapeUpdateRelationsRequest;
use App\Http\Admin\Shared\Resources\Identifiers\ApiEntityIdentifierResource;
use App\Http\Shared\Controller;
use Domain\Inserts\Insert\Services\RelationServices\InsertsInsertShapeRelationsService;
use Illuminate\Http\JsonResponse;

final class InsertsInsertShapeRelationshipsController extends Controller
{
    public function __construct(public InsertsInsertShapeRelationsService $insertsInsertShapeService)
    {
    }

    public function index(int $id): JsonResponse
    {
        $model = $this->insertsInsertShapeService->index($id);
        return (new ApiEntityIdentifierResource($model))->response();
    }

    public function update(InsertsInsertShapeUpdateRelationsRequest $request, int $id): JsonResponse
    {
        $data = $request->all();
        $this->insertsInsertShapeService->update($data, $id);

        return response()->json(null, 204);
    }
}
