<?php

declare(strict_types=1);

namespace App\Http\Admin\Inserts\Insert\Controllers;

use App\Http\Admin\Inserts\Insert\Requests\InsertInsertPropertyUpdateRelationsRequest;
use App\Http\Admin\Shared\Resources\Identifiers\ApiEntityIdentifierResource;
use App\Http\Shared\Controller;
use Domain\Inserts\Insert\Services\RelationServices\InsertInsertPropertyRelationsService;
use Illuminate\Http\JsonResponse;

final class InsertInsertPropertyRelationshipsController extends Controller
{
    public function __construct(public InsertInsertPropertyRelationsService $insertInsertPropertyService)
    {
    }

    public function index(int $id): JsonResponse
    {
        $model = $this->insertInsertPropertyService->index($id);
        return (new ApiEntityIdentifierResource($model))->response();
    }

    public function update(InsertInsertPropertyUpdateRelationsRequest $request, int $id): JsonResponse
    {
        $data = $request->all();
        $this->insertInsertPropertyService->update($data, $id);

        return response()->json(null, 204);
    }
}
