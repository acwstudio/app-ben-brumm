<?php

declare(strict_types=1);

namespace App\Http\Site\Jewelleries\JewelleryView\Controllers;

use App\Http\Site\Jewelleries\JewelleryView\Resources\JewelleryViewCollection;
use App\Http\Site\Jewelleries\JewelleryView\Resources\JewelleryViewResource;
use Domain\Views\JewelleryViews\Services\JewelleryViewService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

final class JewelleryViewController
{
    public function __construct(public JewelleryViewService $service)
    {
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): JsonResponse
    {
        $data = $request->all();
        $items = $this->service->index($data);

        return (new JewelleryViewCollection($items))->response();
    }

    public function show(Request $request, int $id): JsonResponse
    {
        $data = $request->all();
        data_set($data, 'id', $id);
        $model = $this->service->show($data, $id);

        return (new JewelleryViewResource($model))->response();
    }
}
