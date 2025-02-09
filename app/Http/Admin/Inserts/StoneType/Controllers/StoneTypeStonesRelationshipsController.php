<?php

declare(strict_types=1);

namespace App\Http\Admin\Inserts\StoneType\Controllers;

use App\Http\Admin\Inserts\StoneType\Requests\StoneTypeStonesUpdateRelationsRequest;
use App\Http\Admin\Shared\Resources\Identifiers\ApiEntityIdentifierResource;
use App\Http\Shared\Controller;
use Domain\Inserts\Stone\Models\Stone;
use Domain\Inserts\StoneType\Services\RelationServices\StoneTypeStonesRelationsService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Collection;

final class StoneTypeStonesRelationshipsController extends Controller
{
    public function __construct(public StoneTypeStonesRelationsService $service)
    {
    }

    public function index(int $id): JsonResponse
    {
        $collection = $this->service->index($id);

        return (ApiEntityIdentifierResource::collection($collection))->response();
    }

    public function update(StoneTypeStonesUpdateRelationsRequest $request, int $id): JsonResponse
    {
        $data = $request->all();
        $this->service->update($data, $id);

        return response()->json(null, 204);
    }
}
