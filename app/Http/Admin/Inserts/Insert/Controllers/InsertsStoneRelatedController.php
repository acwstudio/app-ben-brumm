<?php

declare(strict_types=1);

namespace App\Http\Admin\Inserts\Insert\Controllers;

use App\Http\Admin\Inserts\Stone\Resources\StoneResource;
use App\Http\Shared\Controller;
use Domain\Inserts\Insert\Services\RelationServices\InsertsStoneRelationsService;
use Illuminate\Http\JsonResponse;

final class InsertsStoneRelatedController extends Controller
{
    public function __construct(public InsertsStoneRelationsService $insertsStoneService)
    {
    }

    public function index(int $id): JsonResponse
    {
        $model = $this->insertsStoneService->index($id);
        return (new StoneResource($model))->response();
    }
}
