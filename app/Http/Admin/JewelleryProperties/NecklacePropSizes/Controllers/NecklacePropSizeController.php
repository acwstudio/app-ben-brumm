<?php

declare(strict_types=1);

namespace App\Http\Admin\JewelleryProperties\NecklacePropSizes\Controllers;

use App\Http\Admin\JewelleryProperties\NecklacePropSizes\Resources\NecklacePropSizeCollection;
use App\Http\Admin\JewelleryProperties\NecklacePropSizes\Resources\NecklacePropSizeResource;
use Domain\JewelleryProperties\NecklacePropSize\Models\NecklacePropSize;
use Domain\JewelleryProperties\NecklacePropSize\Services\NecklacePropSizeService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

final class NecklacePropSizeController
{
    public function __construct(public NecklacePropSizeService $necklacePropSizeService)
    {
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): JsonResponse
    {
        $data = $request->all();
        $items = $this->necklacePropSizeService->index($data);

        return (new NecklacePropSizeCollection($items))->response();
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
        $model = $this->necklacePropSizeService->show($id, $data);

        return (new NecklacePropSizeResource($model))->response();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, NecklacePropSize $necklacePropSize)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NecklacePropSize $necklacePropSize)
    {
        //
    }
}
