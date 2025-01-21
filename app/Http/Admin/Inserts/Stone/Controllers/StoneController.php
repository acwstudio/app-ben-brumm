<?php

declare(strict_types=1);

namespace App\Http\Admin\Inserts\Stone\Controllers;

use App\Http\Admin\Inserts\Stone\Requests\StoneStoreRequest;
use App\Http\Admin\Inserts\Stone\Requests\StoneUpdateRequest;
use App\Http\Admin\Inserts\Stone\Resources\StoneCollection;
use App\Http\Admin\Inserts\Stone\Resources\StoneResource;
use App\Http\Shared\Controller;
use Domain\Inserts\Stone\Models\Stone;
use Domain\Inserts\Stone\Services\StoneService;
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
     * @throws \Throwable
     */
    public function store(StoneStoreRequest $request): JsonResponse
    {
        $data = $request->all();
        $model = $this->stoneService->store($data);

        return (new StoneResource(Stone::find($model->id)))
            ->response()
            ->header('Location', route('admin.stones.show', [
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
        $model = $this->stoneService->show($data, $id);

        return (new StoneResource($model))->response();
    }

    /**
     * Update the specified resource in storage.
     * @throws \Throwable
     */
    public function update(StoneUpdateRequest $request, int $id): JsonResponse
    {
        $data = $request->all();
        $this->stoneService->update($data, $id);

        return response()->json(null, 204);
    }

    /**
     * Remove the specified resource from storage.
     * @throws \Throwable
     */
    public function destroy(int $id): JsonResponse
    {
        $this->stoneService->destroy($id);

        return response()->json(null, 204);
    }
}
