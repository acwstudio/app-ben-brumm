<?php

declare(strict_types=1);

namespace App\Http\Admin\JewelleryProperties\BroochProps\Controllers;

use App\Http\Admin\JewelleryProperties\BroochProps\Resources\BroochPropCollection;
use App\Http\Admin\JewelleryProperties\BroochProps\Resources\BroochPropResource;
use Domain\JewelleryProperties\BroochProp\Models\BroochProp;
use Domain\JewelleryProperties\BroochProp\Services\BroochPropService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

final class BroochPropController
{
    public function __construct(public BroochPropService $broochPropService)
    {
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): JsonResponse
    {
        $data = $request->all();
        $items = $this->broochPropService->index($data);

        return (new BroochPropCollection($items))->response();
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
        $model = $this->broochPropService->show($id, $data);

        return (new BroochPropResource($model))->response();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BroochProp $broochProp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BroochProp $broochProp)
    {
        //
    }
}
