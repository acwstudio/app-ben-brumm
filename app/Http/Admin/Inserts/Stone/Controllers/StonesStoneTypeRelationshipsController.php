<?php

declare(strict_types=1);

namespace App\Http\Admin\Inserts\Stone\Controllers;

use App\Http\Admin\Inserts\Stone\Requests\StonesStoneTypeUpdateRelationsRequest;
use App\Http\Admin\Shared\Resources\Identifiers\ApiEntityIdentifierResource;
use App\Http\Shared\Controller;
use Domain\Inserts\Stone\Services\RelationServices\StonesStoneTypeRelationsService;
use Illuminate\Http\JsonResponse;

final class StonesStoneTypeRelationshipsController extends Controller
{
    public function __construct(public StonesStoneTypeRelationsService $service)
    {
    }
    public function index(int $id): JsonResponse
    {
        $model = $this->service->index($id);

        return (new ApiEntityIdentifierResource($model))->response();
    }

    public function update(StonesStoneTypeUpdateRelationsRequest $request, int $id): JsonResponse
    {
        $data = $request->all();
        $this->service->update($data, $id);

        return response()->json(null, 204);
    }
}
