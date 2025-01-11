<?php

declare(strict_types=1);

namespace App\Http\Admin\JewelleryProperties\CharmPendantProps\Controllers;

use App\Http\Admin\JewelleryProperties\CharmPendantProps\Resources\CharmPendantPropCollection;
use App\Http\Admin\JewelleryProperties\CharmPendantProps\Resources\CharmPendantPropResource;
use Domain\JewelleryProperties\CharmPendantProp\Models\CharmPendantProp;
use Domain\JewelleryProperties\CharmPendantProp\Services\CharmPendantPropService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

final class CharmPendantPropController
{
    public function __construct(public CharmPendantPropService $charmPendantPropService)
    {
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): JsonResponse
    {
        $data = $request->all();
        $items = $this->charmPendantPropService->index($data);

        return (new CharmPendantPropCollection($items))->response();
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
        $model = $this->charmPendantPropService->show($id, $data);

        return (new CharmPendantPropResource($model))->response();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CharmPendantProp $charmPendantProp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CharmPendantProp $charmPendantProp)
    {
        //
    }
}
