<?php

declare(strict_types=1);

namespace App\Http\Admin\Inserts\Insert\Controllers;

use App\Http\Admin\Inserts\Insert\Requests\InsertsJewelleryUpdateRelationsRequest;
use App\Http\Admin\Shared\Resources\Identifiers\ApiEntityIdentifierResource;
use App\Http\Shared\Controller;
use Domain\Inserts\Insert\Services\RelationServices\InsertsJewelleryRelationsService;
use Illuminate\Http\JsonResponse;

final class InsertsJewelleryRelationshipsController extends Controller
{
    public function __construct(public InsertsJewelleryRelationsService $insertsJewelleryService)
    {
    }

    public function index(int $id): JsonResponse
    {
        $model = $this->insertsJewelleryService->index($id);
        return (new ApiEntityIdentifierResource($model))->response();
    }

    public function update(InsertsJewelleryUpdateRelationsRequest $request, int $id): JsonResponse
    {
        $data = $request->all();
        $this->insertsJewelleryService->update($data, $id);

        return response()->json(null, 204);
    }
}
