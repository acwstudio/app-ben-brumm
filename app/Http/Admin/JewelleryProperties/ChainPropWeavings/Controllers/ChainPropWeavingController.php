<?php

declare(strict_types=1);

namespace App\Http\Admin\JewelleryProperties\ChainPropWeavings\Controllers;

use App\Http\Admin\JewelleryProperties\ChainPropWeavings\Resources\ChainPropWeavingCollection;
use App\Http\Admin\JewelleryProperties\ChainPropWeavings\Resources\ChainPropWeavingResource;
use Domain\JewelleryProperties\ChainPropWeaving\Models\ChainPropWeaving;
use Domain\JewelleryProperties\ChainPropWeaving\Services\ChainPropWeavingService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

final class ChainPropWeavingController
{
    public function __construct(public ChainPropWeavingService $chainPropWeavingService)
    {
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): JsonResponse
    {
        $data = $request->all();
        $items = $this->chainPropWeavingService->index($data);

        return (new ChainPropWeavingCollection($items))->response();
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
        $model = $this->chainPropWeavingService->show($id, $data);

        return (new ChainPropWeavingResource($model))->response();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ChainPropWeaving $chainPropWeaving)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ChainPropWeaving $chainPropWeaving)
    {
        //
    }
}
