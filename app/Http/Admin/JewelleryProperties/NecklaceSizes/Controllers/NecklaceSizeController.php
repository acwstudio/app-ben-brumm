<?php

declare(strict_types=1);

namespace App\Http\Admin\JewelleryProperties\NecklaceSizes\Controllers;

use App\Http\Admin\JewelleryProperties\NecklaceSizes\Resources\NecklaceSizeCollection;
use App\Http\Admin\JewelleryProperties\NecklaceSizes\Resources\NecklaceSizeResource;
use Domain\JewelleryProperties\NecklaceSize\Models\NecklaceSize;
use Domain\JewelleryProperties\NecklaceSize\Services\NecklaceSizeService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

final class NecklaceSizeController
{
    public function __construct(public NecklaceSizeService $necklaceSizeService)
    {
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): JsonResponse
    {
        $data = $request->all();
        $items = $this->necklaceSizeService->index($data);

        return (new NecklaceSizeCollection($items))->response();
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
        $model = $this->necklaceSizeService->show($id, $data);

        return (new NecklaceSizeResource($model))->response();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, NecklaceSize $necklaceSize)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NecklaceSize $necklaceSize)
    {
        //
    }
}
