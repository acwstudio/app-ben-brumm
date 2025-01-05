<?php

declare(strict_types=1);

namespace App\Http\Admin\Inserts\StoneType\Controllers;

use App\Http\Admin\Inserts\StoneType\Resources\StoneTypeCollection;
use App\Http\Shared\Controller;
use Domain\Inserts\StoneType\Models\StoneType;
use Domain\Inserts\StoneType\Services\StoneTypeService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

final class StoneTypeController extends Controller
{
    public function __construct(public StoneTypeService $stoneTypeService)
    {
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): JsonResponse
    {
        $data = $request->all();
        $items = $this->stoneTypeService->index($data);

        return (new StoneTypeCollection($items))->response();
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
    public function show(StoneType $stoneType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, StoneType $stoneType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(StoneType $stoneType)
    {
        //
    }
}
