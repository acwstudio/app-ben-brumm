<?php

declare(strict_types=1);

namespace App\Http\Admin\JewelleryProperties\ChainProps\Controllers;

use App\Http\Admin\JewelleryProperties\ChainProps\Resources\ChainPropCollection;
use App\Http\Admin\JewelleryProperties\ChainProps\Resources\ChainPropResource;
use Domain\JewelleryProperties\ChainProp\Models\ChainProp;
use Domain\JewelleryProperties\ChainProp\Services\ChainPropService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

final class ChainPropController
{
    public function __construct(public ChainPropService $chainPropService)
    {
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): JsonResponse
    {
        $data = $request->all();
        $items = $this->chainPropService->index($data);

        return (new ChainPropCollection($items))->response();
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
        $model = $this->chainPropService->show($id, $data);

        return (new ChainPropResource($model))->response();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ChainProp $chainProp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ChainProp $chainProp)
    {
        //
    }
}
