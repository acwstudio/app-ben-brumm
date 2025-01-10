<?php

declare(strict_types=1);

namespace App\Http\Admin\JewelleryProperties\BraceletProps\Controllers;

use App\Http\Admin\JewelleryProperties\BraceletProps\Resources\BraceletPropCollection;
use App\Http\Admin\JewelleryProperties\BraceletProps\Resources\BraceletPropResource;
use Domain\JewelleryProperties\BraceletProp\Services\BraceletPropService;
use Illuminate\Http\Request;

final class BraceletPropController
{
    public function __construct(public BraceletPropService $braceletPropService)
    {
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $data = $request->all();
        $items = $this->braceletPropService->index($data);

        return (new BraceletPropCollection($items))->response();
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
    public function show(Request $request, int $id)
    {
        $data = $request->all();
        data_set($data, 'id', $id);
        $model = $this->braceletPropService->show($id, $data);

        return (new BraceletPropResource($model))->response();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
