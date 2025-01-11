<?php

declare(strict_types=1);

namespace App\Http\Admin\JewelleryProperties\CufflinkProps\Controllers;

use App\Http\Admin\JewelleryProperties\CufflinkProps\Resources\CuffLinkPropCollection;
use App\Http\Admin\JewelleryProperties\CufflinkProps\Resources\CuffLinkPropResource;
use Domain\JewelleryProperties\CufflinkProp\Models\CuffLinkProp;
use Domain\JewelleryProperties\CufflinkProp\Services\CuffLinkPropService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

final class CuffLinkPropController
{
    public function __construct(public CuffLinkPropService $cuffLinkPropService)
    {
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): JsonResponse
    {
        $data = $request->all();
        $items = $this->cuffLinkPropService->index($data);

        return (new CuffLinkPropCollection($items))->response();
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
        $model = $this->cuffLinkPropService->show($id, $data);

        return (new CuffLinkPropResource($model))->response();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CuffLinkProp $cufflinkProp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CuffLinkProp $cufflinkProp)
    {
        //
    }
}
