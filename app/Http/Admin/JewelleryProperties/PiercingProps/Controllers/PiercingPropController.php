<?php

declare(strict_types=1);

namespace App\Http\Admin\JewelleryProperties\PiercingProps\Controllers;

use App\Http\Admin\JewelleryProperties\PiercingProps\Resources\PiercingPropCollection;
use App\Http\Admin\JewelleryProperties\PiercingProps\Resources\PiercingPropResource;
use Domain\JewelleryProperties\PiercingProp\Models\PiercingProp;
use Domain\JewelleryProperties\PiercingProp\Services\PiercingPropService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

final class PiercingPropController
{
    public function __construct(public PiercingPropService $piercingPropService)
    {
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): JsonResponse
    {
        $data = $request->all();
        $items = $this->piercingPropService->index($data);

        return (new PiercingPropCollection($items))->response();
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
        $model = $this->piercingPropService->show($id, $data);

        return (new PiercingPropResource($model))->response();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PiercingProp $piercingProp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PiercingProp $piercingProp)
    {
        //
    }
}
