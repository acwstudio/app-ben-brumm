<?php

declare(strict_types=1);

namespace App\Http\Admin\Inserts\InsertColour\Controllers;

use App\Http\Admin\Inserts\InsertColour\Requests\InsertColourStoreRequest;
use App\Http\Admin\Inserts\InsertColour\Requests\InsertColourUpdateRequest;
use App\Http\Admin\Inserts\InsertColour\Resources\InsertColourCollection;
use App\Http\Admin\Inserts\InsertColour\Resources\InsertColourResource;
use App\Http\Shared\Controller;
use Domain\Inserts\InsertColour\Models\InsertColour;
use Domain\Inserts\InsertColour\Services\InsertColourService;
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
     * @throws \Throwable
     */
    public function store(InsertColourStoreRequest $request): JsonResponse
    {
        $data = $request->all();
        $model = $this->insertColourService->store($data);

        return (new InsertColourResource(InsertColour::find($model->id)))
            ->response()
            ->header('Location', route('admin.insert-colours.show', [
                'id' => $model->id
            ]));
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, int $id): JsonResponse
    {
        $data = $request->all();
        data_set($data, 'id', $id);
        $model = $this->insertColourService->show($data, $id);

        return (new InsertColourResource($model))->response();
    }

    /**
     * Update the specified resource in storage.
     * @throws \Throwable
     */
    public function update(InsertColourUpdateRequest $request, int $id): JsonResponse
    {
        $data = $request->all();
        $this->insertColourService->update($data, $id);

        return response()->json(null, 204);
    }

    /**
     * Remove the specified resource from storage.
     * @throws \Throwable
     */
    public function destroy(int $id): JsonResponse
    {
        $this->insertColourService->destroy($id);

        return response()->json(null, 204);
    }
}
