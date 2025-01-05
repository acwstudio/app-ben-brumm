<?php

declare(strict_types=1);

namespace App\Http\Admin\Inserts\Stone\Controllers;

use App\Http\Admin\Inserts\Stone\Resources\StoneCollection;
use App\Http\Shared\Controller;
use Domain\Inserts\Models\Stone;
use Domain\Inserts\Services\Stone\StoneService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

final class StoneController extends Controller
{
    public function __construct(public StoneService $stoneService)
    {
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): JsonResponse
    {
        $data = $request->all();
        $items = $this->stoneService->index($data);

        return (new StoneCollection($items))->response();
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
    public function show(Stone $stone)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Stone $stone)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Stone $stone)
    {
        //
    }
}
