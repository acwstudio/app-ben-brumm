<?php

declare(strict_types=1);

namespace App\Http\Admin\JewelleryProperties\ChainPropSizes\Controllers;

use App\Http\Admin\JewelleryProperties\ChainPropSizes\Resources\ChainPropSizeCollection;
use App\Http\Admin\JewelleryProperties\ChainPropSizes\Resources\ChainPropSizeResource;
use Domain\JewelleryProperties\ChainPropSize\Services\ChainPropSizeService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

final class ChainPropSizeController
{
    public function __construct(public ChainPropSizeService $chainPropSizeService)
    {
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): JsonResponse
    {
        $data = $request->all();
        $items = $this->chainPropSizeService->index($data);

        return (new ChainPropSizeCollection($items))->response();
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
        $model = $this->chainPropSizeService->show($id, $data);

        return (new ChainPropSizeResource($model))->response();
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
