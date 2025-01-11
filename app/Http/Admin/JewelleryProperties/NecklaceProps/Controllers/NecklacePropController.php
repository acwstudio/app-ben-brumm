<?php

declare(strict_types=1);

namespace App\Http\Admin\JewelleryProperties\NecklaceProps\Controllers;

use App\Http\Admin\JewelleryProperties\NecklaceProps\Resources\NecklacePropCollection;
use App\Http\Admin\JewelleryProperties\NecklaceProps\Resources\NecklacePropResource;
use Domain\JewelleryProperties\NecklaceProp\Models\NecklaceProp;
use Domain\JewelleryProperties\NecklaceProp\Services\NecklacePropService;
use Illuminate\Http\Request;

final class NecklacePropController
{
    public function __construct(public NecklacePropService $necklacePropService)
    {
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $data = $request->all();
        $items = $this->necklacePropService->index($data);

        return (new NecklacePropCollection($items))->response();
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
        $model = $this->necklacePropService->show($id, $data);

        return (new NecklacePropResource($model))->response();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, NecklaceProp $necklaceProp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NecklaceProp $necklaceProp)
    {
        //
    }
}
