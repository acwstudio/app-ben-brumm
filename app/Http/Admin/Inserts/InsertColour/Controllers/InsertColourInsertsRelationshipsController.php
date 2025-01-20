<?php

declare(strict_types=1);

namespace App\Http\Admin\Inserts\InsertColour\Controllers;

use App\Http\Admin\Inserts\InsertColour\Requests\InsertColourInsertsUpdateRelationsRequest;
use App\Http\Admin\Shared\Resources\Identifiers\ApiEntityIdentifierResource;
use App\Http\Shared\Controller;
use Domain\Inserts\InsertColour\Models\InsertColour;
use Domain\Inserts\InsertColour\Services\RelationServices\InsertColourInsertsService;
use Illuminate\Http\JsonResponse;

final class InsertColourInsertsRelationshipsController extends Controller
{
    public function __construct(public InsertColourInsertsService $service)
    {
    }

    public function index(int $id): JsonResponse
    {
        $collection = $this->service->index($id);
        return ApiEntityIdentifierResource::collection($collection)->response();
    }

    public function update(InsertColourInsertsUpdateRelationsRequest $request, int $id): JsonResponse
    {
        $data = $request->all();
        $this->service->update($data, $id);

        return response()->json(null, 204);
    }
}
