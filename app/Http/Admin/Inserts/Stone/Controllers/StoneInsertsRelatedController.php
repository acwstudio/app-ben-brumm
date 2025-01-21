<?php

declare(strict_types=1);

namespace App\Http\Admin\Inserts\Stone\Controllers;

use App\Http\Admin\Inserts\Insert\Resources\InsertCollection;
use App\Http\Shared\Controller;
use Domain\Inserts\Stone\Services\RelationServices\StoneInsertsRelationsService;

final class StoneInsertsRelatedController extends Controller
{
    public function __construct(public StoneInsertsRelationsService $service)
    {
    }

    public function index(int $id): \Illuminate\Http\JsonResponse
    {
        $collection = $this->service->index($id);

        return (new InsertCollection($collection))->response();
    }
}
