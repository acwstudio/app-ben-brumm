<?php

declare(strict_types=1);

namespace App\Http\Admin\Inserts\InsertProperty\Controllers;

use App\Http\Admin\Inserts\InsertProperty\Requests\InsertPropertyInsertUpdateRelationsRequest;
use App\Http\Admin\Shared\Resources\Identifiers\ApiEntityIdentifierResource;
use App\Http\Shared\Controller;
use Domain\Inserts\InsertProperty\Services\RelationServices\InsertPropertyInsertRelationsService;
use Illuminate\Http\JsonResponse;

final class InsertPropertyInsertRelationshipsController extends Controller
{
    public function __construct(public InsertPropertyInsertRelationsService $service)
    {
    }

    public function index(int $id): JsonResponse
    {
        $model = $this->service->index($id);
        return (new ApiEntityIdentifierResource($model))->response();
    }
}
