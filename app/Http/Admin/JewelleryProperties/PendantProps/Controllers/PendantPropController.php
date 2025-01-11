<?php

declare(strict_types=1);

namespace App\Http\Admin\JewelleryProperties\PendantProps\Controllers;

use App\Http\Admin\JewelleryProperties\PendantProps\Resources\PendantPropCollection;
use App\Http\Admin\JewelleryProperties\PendantProps\Resources\PendantPropResource;
use Domain\JewelleryProperties\PendantProp\Models\PendantProp;
use Domain\JewelleryProperties\PendantProp\Services\PendantPropService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

final class PendantPropController
{
    public function __construct(public PendantPropService $pendantPropService)
    {
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): JsonResponse
    {
        $data = $request->all();
        $items = $this->pendantPropService->index($data);

        return (new PendantPropCollection($items))->response();
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
        $model = $this->pendantPropService->show($id, $data);

        return (new PendantPropResource($model))->response();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PendantProp $pendantProp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PendantProp $pendantProp)
    {
        //
    }
}
