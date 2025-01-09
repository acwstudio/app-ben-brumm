<?php

declare(strict_types=1);

namespace App\Http\Admin\JewelleryProperties\BraceletSizes\Controllers;

use App\Http\Admin\JewelleryProperties\BraceletSizes\Resources\BraceletSizeCollection;
use App\Http\Admin\JewelleryProperties\BraceletSizes\Resources\BraceletSizeResource;
use Domain\JewelleryProperties\BraceletSize\Services\BraceletSizeService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

final class BraceletSizeController
{
    public function __construct(public BraceletSizeService $braceletSizeService)
    {
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): JsonResponse
    {
        $data = $request->all();
        $items = $this->braceletSizeService->index($data);

        return (new BraceletSizeCollection($items))->response();
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
        $model = $this->braceletSizeService->show($id, $data);

        return (new BraceletSizeResource($model))->response();
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
