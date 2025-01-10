<?php

declare(strict_types=1);

namespace App\Http\Admin\JewelleryProperties\BraceletPropWeavings\Controllers;

use App\Http\Admin\JewelleryProperties\BraceletPropWeavings\Resources\BraceletPropWeavingCollection;
use App\Http\Admin\JewelleryProperties\BraceletPropWeavings\Resources\BraceletPropWeavingResource;
use Domain\JewelleryProperties\BraceletPropWeaving\Models\BraceletPropWeaving;
use Domain\JewelleryProperties\BraceletPropWeaving\Services\BraceletPropWeavingService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

final class BraceletPropWeavingController
{
    public function __construct(public BraceletPropWeavingService $braceletPropWeavingService)
    {
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): JsonResponse
    {
        $data = $request->all();
        $items = $this->braceletPropWeavingService->index($data);

        return (new BraceletPropWeavingCollection($items))->response();
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
        $model = $this->braceletPropWeavingService->show($id, $data);

        return (new BraceletPropWeavingResource($model))->response();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BraceletPropWeaving $braceletPropWeaving)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BraceletPropWeaving $braceletPropWeaving)
    {
        //
    }
}
