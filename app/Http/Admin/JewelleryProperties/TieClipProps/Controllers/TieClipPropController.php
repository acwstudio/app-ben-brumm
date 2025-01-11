<?php

declare(strict_types=1);

namespace App\Http\Admin\JewelleryProperties\TieClipProps\Controllers;

use App\Http\Admin\JewelleryProperties\TieClipProps\Resources\TieClipPropCollection;
use App\Http\Admin\JewelleryProperties\TieClipProps\Resources\TieClipPropResource;
use Domain\JewelleryProperties\TieClipProp\Models\TieClipProp;
use Domain\JewelleryProperties\TieClipProp\Services\TieClipPropService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

final class TieClipPropController
{
    public function __construct(public TieClipPropService $tieClipPropService)
    {
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): JsonResponse
    {
        $data = $request->all();
        $items = $this->tieClipPropService->index($data);

        return (new TieClipPropCollection($items))->response();
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
        $model = $this->tieClipPropService->show($id, $data);

        return (new TieClipPropResource($model))->response();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TieClipProp $tieClipProp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TieClipProp $tieClipProp)
    {
        //
    }
}
