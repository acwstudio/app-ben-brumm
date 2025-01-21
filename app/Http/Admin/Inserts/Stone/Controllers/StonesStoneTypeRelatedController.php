<?php

declare(strict_types=1);

namespace App\Http\Admin\Inserts\Stone\Controllers;

use App\Http\Admin\Inserts\StoneType\Resources\StoneTypeResource;
use App\Http\Shared\Controller;
use Domain\Inserts\Stone\Services\RelationServices\StonesStoneTypeRelationsService;
use Illuminate\Http\JsonResponse;

final class StonesStoneTypeRelatedController extends Controller
{
    public function __construct(public StonesStoneTypeRelationsService $service)
    {
    }

    public function index(int $id): JsonResponse
    {
        $model = $this->service->index($id);

        return (new StoneTypeResource($model))->response();
    }
}
