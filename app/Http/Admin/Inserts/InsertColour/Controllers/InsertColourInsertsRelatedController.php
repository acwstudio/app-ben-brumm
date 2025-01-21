<?php

declare(strict_types=1);

namespace App\Http\Admin\Inserts\InsertColour\Controllers;

use App\Http\Admin\Inserts\Insert\Resources\InsertCollection;
use App\Http\Shared\Controller;
use Domain\Inserts\InsertColour\Services\RelationServices\InsertColourInsertsRelationsService;
use Illuminate\Http\JsonResponse;

final class InsertColourInsertsRelatedController extends Controller
{
    public function __construct(public InsertColourInsertsRelationsService $service)
    {
    }

    public function index(int $id): JsonResponse
    {
        $collection = $this->service->index($id);

        return (new InsertCollection($collection))->response();
    }
}
