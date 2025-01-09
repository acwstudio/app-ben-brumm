<?php

declare(strict_types=1);

namespace App\Http\Admin\JewelleryProperties\ChainSizes\Controllers;

use App\Http\Admin\JewelleryProperties\ChainSizes\Resources\ChainSizeCollection;
use App\Http\Admin\JewelleryProperties\ChainSizes\Resources\ChainSizeResource;
use Domain\JewelleryProperties\ChainSize\Services\ChainSizeService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

final class ChainSizeController
{
    public function __construct(public ChainSizeService $chainSizeService)
    {
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): JsonResponse
    {
        $data = $request->all();
        $items = $this->chainSizeService->index($data);

        return (new ChainSizeCollection($items))->response();
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
        $model = $this->chainSizeService->show($id, $data);

        return (new ChainSizeResource($model))->response();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        //
    }
}
