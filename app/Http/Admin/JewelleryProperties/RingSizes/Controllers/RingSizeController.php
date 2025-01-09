<?php

declare(strict_types=1);

namespace App\Http\Admin\JewelleryProperties\RingSizes\Controllers;

use App\Http\Admin\JewelleryProperties\RingSizes\Resources\RingSizeCollection;
use Domain\JewelleryProperties\RingSize\RingPropService\RingSizeService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

final class RingSizeController
{
    public function __construct(public RingSizeService $ringSizeService)
    {
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): JsonResponse
    {
        $data = $request->all();
        $items = $this->ringSizeService->index($data);

        return (new RingSizeCollection($items))->response();
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
    public function show(string $id)
    {
        //
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
