<?php

declare(strict_types=1);

namespace App\Http\Admin\Inserts\Stone\Controllers;

use App\Http\Admin\Inserts\Stone\Requests\StoneInsertsUpdateRelationsRequest;
use App\Http\Admin\Shared\Resources\Identifiers\ApiEntityIdentifierResource;
use App\Http\Shared\Controller;
use Domain\Inserts\Stone\Services\RelationServices\StoneInsertsRelationsService;
use Illuminate\Http\JsonResponse;

final class StoneInsertsRelationshipsController extends Controller
{
    public function __construct(public StoneInsertsRelationsService $service)
    {
    }

    public function index(int $id): JsonResponse
    {
        $collection = $this->service->index($id);

        return ApiEntityIdentifierResource::collection($collection)->response();
    }

    public function update(StoneInsertsUpdateRelationsRequest $request, int $id): JsonResponse
    {
        $data = $request->all();
        $this->service->update($data, $id);

        return response()->json(null, 204);
    }
}
