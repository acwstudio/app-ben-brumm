<?php

declare(strict_types=1);

namespace App\Http\Admin\Inserts\Insert\Controllers;

use App\Http\Admin\Inserts\Insert\Requests\InsertsStoneUpdateRelationsRequest;
use App\Http\Admin\Shared\Resources\Identifiers\ApiEntityIdentifierResource;
use App\Http\Shared\Controller;
use Domain\Inserts\Insert\Models\Insert;
use Domain\Inserts\Insert\Services\RelationServices\InsertsStoneRelationsService;
use Illuminate\Http\JsonResponse;

final class InsertsStoneRelationshipsController extends Controller
{
    public function __construct(public InsertsStoneRelationsService $insertsStoneService)
    {
    }

    public function index(int $id): JsonResponse
    {
        $model = $this->insertsStoneService->index($id);
        return (new ApiEntityIdentifierResource($model))->response();
    }

    public function update(InsertsStoneUpdateRelationsRequest $request, int $id): JsonResponse
    {
        $data = $request->all();
        $this->insertsStoneService->update($data, $id);

        return response()->json(null, 204);
    }
}
