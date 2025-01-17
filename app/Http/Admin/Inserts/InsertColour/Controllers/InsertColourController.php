<?php

declare(strict_types=1);

namespace App\Http\Admin\Inserts\InsertColour\Controllers;

use App\Http\Admin\Inserts\InsertColour\Resources\InsertColourCollection;
use App\Http\Admin\Inserts\InsertColour\Resources\InsertColourResource;
use App\Http\Shared\Controller;
use Domain\Inserts\InsertColour\Models\InsertColour;
use Domain\Inserts\InsertColour\Services\InsertColourService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Console\ControllerMakeCommand;

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
    public function show(Request $request, int $id): JsonResponse
    {
        $data = $request->all();
        data_set($data, 'id', $id);
        $model = $this->insertColourService->show($id, $data);

        return (new InsertColourResource($model))->response();
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
