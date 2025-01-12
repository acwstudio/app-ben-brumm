<?php

declare(strict_types=1);

namespace App\Http\Admin\JewelleryProperties\EarringProps\Controllers;

use App\Http\Admin\JewelleryProperties\EarringProps\Resources\EarringPropCollection;
use App\Http\Admin\JewelleryProperties\EarringProps\Resources\EarringPropResource;
use Domain\JewelleryProperties\EarringProp\Models\EarringProp;
use Domain\JewelleryProperties\EarringProp\Services\EarringPropService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

final class EarringPropController
{
    public function __construct(public EarringPropService $earringPropService)
    {
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): JsonResponse
    {
        $data = $request->all();
        $items = $this->earringPropService->index($data);

        return (new EarringPropCollection($items))->response();
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
        $model = $this->earringPropService->show($id, $data);

        return (new EarringPropResource($model))->response();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, EarringProp $earringProp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EarringProp $earringProp)
    {
        //
    }
}
