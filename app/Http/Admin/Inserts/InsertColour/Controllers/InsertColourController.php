<?php

declare(strict_types=1);

namespace App\Http\Admin\Inserts\InsertColour\Controllers;

use App\Http\Admin\Inserts\InsertColour\Resources\InsertColourCollection;
use App\Http\Controllers\Controller;
use Domain\Inserts\Models\InsertColour;
use Domain\Inserts\Services\InsertColour\InsertColourService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

final class InsertColourController extends Controller
{
    public function __construct(public InsertColourService $insertColourService)
    {
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): JsonResponse
    {
        $data = $request->all();
        $items = $this->insertColourService->index($data);

        return (new InsertColourCollection($items))->response();
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
    public function show(InsertColour $insertColours)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, InsertColour $insertColours)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InsertColour $insertColours)
    {
        //
    }
}
