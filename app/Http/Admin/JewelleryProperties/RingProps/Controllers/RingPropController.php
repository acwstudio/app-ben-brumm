<?php

declare(strict_types=1);

namespace App\Http\Admin\JewelleryProperties\RingProps\Controllers;

use App\Http\Admin\JewelleryProperties\RingProps\Resources\RingPropCollection;
use App\Http\Admin\JewelleryProperties\RingProps\Resources\RingPropResource;
use Domain\JewelleryProperties\RingProp\RingPropService\RingPropService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

final class RingPropController
{
    public function __construct(public RingPropService $ringPropService)
    {
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): JsonResponse
    {
        $data = $request->all();
        $items = $this->ringPropService->index($data);

        return (new RingPropCollection($items))->response();
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
        $model = $this->ringPropService->show($id, $data);

        return (new RingPropResource($model))->response();
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
