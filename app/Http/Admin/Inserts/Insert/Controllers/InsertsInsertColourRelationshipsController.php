<?php

declare(strict_types=1);

namespace App\Http\Admin\Inserts\Insert\Controllers;

use App\Http\Admin\Inserts\Insert\Requests\InsertsInsertColourUpdateRelationsRequest;
use App\Http\Admin\Shared\Resources\Identifiers\ApiEntityIdentifierResource;
use App\Http\Shared\Controller;
use Domain\Inserts\Insert\Services\RelationServices\InsertsInsertColourService;
use Illuminate\Http\JsonResponse;

final class InsertsInsertColourRelationshipsController extends Controller
{
    public function __construct(public InsertsInsertColourService $insertsInsertColourService)
    {
    }

    public function index(int $id): JsonResponse
    {
        $model = $this->insertsInsertColourService->index($id);
        return (new ApiEntityIdentifierResource($model))->response();
    }

    public function update(InsertsInsertColourUpdateRelationsRequest $request, int $id): JsonResponse
    {
        $data = $request->all();
        $this->insertsInsertColourService->update($data, $id);

        return response()->json(null, 204);
    }
}
