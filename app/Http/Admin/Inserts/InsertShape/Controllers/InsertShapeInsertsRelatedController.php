<?php

declare(strict_types=1);

namespace App\Http\Admin\Inserts\InsertShape\Controllers;

use App\Http\Admin\Inserts\Insert\Resources\InsertCollection;
use App\Http\Shared\Controller;
use Domain\Inserts\InsertShape\Services\RelationServices\InsertShapeInsertsRelationsService;
use Illuminate\Http\JsonResponse;

final class InsertShapeInsertsRelatedController extends Controller
{
    public function __construct(public InsertShapeInsertsRelationsService $service)
    {
    }

    public function index(int $id): JsonResponse
    {
        $collection = $this->service->index($id);

        return (new InsertCollection($collection))->response();
    }
}
