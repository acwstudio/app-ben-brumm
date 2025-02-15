<?php

declare(strict_types=1);

namespace App\Http\Site\Jewelleries\InsertView\Controllers;

use App\Http\Site\Jewelleries\InsertView\Resources\InsertViewCollection;
use App\Http\Site\Jewelleries\InsertView\Resources\InsertViewResource;
use Domain\Views\InsertViews\Services\InsertViewService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

final class InsertViewController
{
    public function __construct(public InsertViewService $service)
    {
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): JsonResponse
    {
        $data = $request->all();
        $items = $this->service->index($data);

        return (new InsertViewCollection($items))->response();
    }

    public function show(Request $request, int $id): JsonResponse
    {
        $data = $request->all();
        data_set($data, 'id', $id);
        $model = $this->service->show($data, $id);

        return (new InsertViewResource($model))->response();
    }
}
