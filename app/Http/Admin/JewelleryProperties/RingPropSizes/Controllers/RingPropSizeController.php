<?php

declare(strict_types=1);

namespace App\Http\Admin\JewelleryProperties\RingPropSizes\Controllers;

use App\Http\Admin\JewelleryProperties\RingPropSizes\Resources\RingPropSizeCollection;
use App\Http\Admin\JewelleryProperties\RingPropSizes\Resources\RingPropSizeResource;
use Domain\JewelleryProperties\RingPropSize\RingPropService\RingPropSizeService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

final class RingPropSizeController
{
    public function __construct(public RingPropSizeService $ringPropSizeService)
    {
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): JsonResponse
    {
        $data = $request->all();
        $items = $this->ringPropSizeService->index($data);

        return (new RingPropSizeCollection($items))->response();
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
        $model = $this->ringPropSizeService->show($id, $data);

        return (new RingPropSizeResource($model))->response();
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
