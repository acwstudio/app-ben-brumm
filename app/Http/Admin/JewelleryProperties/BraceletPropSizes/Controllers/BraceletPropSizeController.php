<?php

declare(strict_types=1);

namespace App\Http\Admin\JewelleryProperties\BraceletPropSizes\Controllers;

use App\Http\Admin\JewelleryProperties\BraceletPropSizes\Resources\BraceletPropSizeCollection;
use App\Http\Admin\JewelleryProperties\BraceletPropSizes\Resources\BraceletPropSizeResource;
use Domain\JewelleryProperties\BraceletPropSize\Services\BraceletPropSizeService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

final class BraceletPropSizeController
{
    public function __construct(public BraceletPropSizeService $braceletPropSizeService)
    {
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): JsonResponse
    {
        $data = $request->all();
        $items = $this->braceletPropSizeService->index($data);

        return (new BraceletPropSizeCollection($items))->response();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, int $id): JsonResponse
    {
        $data = $request->all();
        data_set($data, 'id', $id);
        $model = $this->braceletPropSizeService->show($id, $data);

        return (new BraceletPropSizeResource($model))->response();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
