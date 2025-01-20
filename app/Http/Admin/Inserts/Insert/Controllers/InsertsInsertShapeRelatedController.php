<?php

declare(strict_types=1);

namespace App\Http\Admin\Inserts\Insert\Controllers;

use App\Http\Admin\Inserts\InsertShape\Resources\InsertShapeResource;
use App\Http\Shared\Controller;
use Domain\Inserts\Insert\Models\Insert;
use Domain\Inserts\Insert\Services\RelationServices\InsertsInsertShapeRelationsService;
use Illuminate\Http\JsonResponse;

final class InsertsInsertShapeRelatedController extends Controller
{
    public function __construct(public InsertsInsertShapeRelationsService $insertsInsertShapeService)
    {
    }

    public function index(int $id): JsonResponse
    {
        $model = $this->insertsInsertShapeService->index($id);

        return (new InsertShapeResource($model))->response();
    }
}
