<?php

declare(strict_types=1);

namespace App\Http\Admin\Inserts\StoneType\Controllers;

use App\Http\Admin\Inserts\Stone\Resources\StoneCollection;
use App\Http\Shared\Controller;
use Domain\Inserts\StoneType\Services\RelationServices\StoneTypeStonesRelationsService;
use Illuminate\Http\JsonResponse;

final class StoneTypeStonesRelatedController extends Controller
{
    public function __construct(public StoneTypeStonesRelationsService $service)
    {
    }

    public function index(int $id): JsonResponse
    {
        $collection = $this->service->index($id);

        return (new StoneCollection($collection))->response();
    }
}
