<?php

declare(strict_types=1);

namespace App\Http\Admin\JewelleryProperties\Clasps\Controllers;

use App\Http\Admin\JewelleryProperties\Clasps\Resources\ClaspCollection;
use App\Http\Admin\JewelleryProperties\Clasps\Resources\ClaspResource;
use Domain\JewelleryProperties\Clasp\Models\Clasp;
use Domain\JewelleryProperties\Clasp\Services\ClaspService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

final class ClaspController
{
    public function __construct(public ClaspService $claspService)
    {
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): JsonResponse
    {
        $data = $request->all();
        $items = $this->claspService->index($data);

        return (new ClaspCollection($items))->response();
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
        $model = $this->claspService->show($id, $data);

        return (new ClaspResource($model))->response();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Clasp $clasp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Clasp $clasp)
    {
        //
    }
}
