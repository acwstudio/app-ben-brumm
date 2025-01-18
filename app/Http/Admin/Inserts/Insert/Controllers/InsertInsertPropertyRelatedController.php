<?php

declare(strict_types=1);

namespace App\Http\Admin\Inserts\Insert\Controllers;

use App\Http\Admin\Inserts\InsertProperty\Resources\InsertPropertyResource;
use App\Http\Shared\Controller;
use Domain\Inserts\Insert\Services\RelationServices\InsertInsertPropertyService;
use Illuminate\Http\JsonResponse;

final class InsertInsertPropertyRelatedController extends Controller
{
    public function __construct(public InsertInsertPropertyService $insertInsertPropertyService)
    {
    }

    public function index(int $id): JsonResponse
    {
        $model = $this->insertInsertPropertyService->index($id);

        return (new InsertPropertyResource($model))->response();
    }
}
