<?php

declare(strict_types=1);

namespace App\Http\Admin\Inserts\Insert\Controllers;

use App\Http\Admin\Inserts\InsertColour\Resources\InsertColourResource;
use App\Http\Shared\Controller;
use Domain\Inserts\Insert\Services\RelationServices\InsertsInsertColourService;
use Illuminate\Http\JsonResponse;

final class InsertsInsertColourRelatedController extends Controller
{
    public function __construct(public InsertsInsertColourService $insertsInsertColourService)
    {
    }

    public function index(int $id): JsonResponse
    {
        $model = $this->insertsInsertColourService->index($id);

        return (new InsertColourResource($model))->response();
    }
}
