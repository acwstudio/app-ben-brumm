<?php

declare(strict_types=1);

namespace App\Http\Admin\Inserts\StoneType\Controllers;

use App\Http\Admin\Inserts\StoneType\Requests\StoneTypeStoreRequest;
use App\Http\Admin\Inserts\StoneType\Requests\StoneTypeUpdateRequest;
use App\Http\Admin\Inserts\StoneType\Resources\StoneTypeCollection;
use App\Http\Admin\Inserts\StoneType\Resources\StoneTypeResource;
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
     * @throws \Throwable
     */
    public function store(StoneTypeStoreRequest $request): JsonResponse
    {
        $data = $request->all();
        $model = $this->stoneTypeService->store($data);

        return (new StoneTypeResource(StoneType::find($model->id)))
            ->response()
            ->header('Location', route('admin.stone-types.show', [
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
        $model = $this->stoneTypeService->show($data, $id);

        return (new StoneTypeResource($model))->response();
    }

    /**
     * Update the specified resource in storage.
     * @throws \Throwable
     */
    public function update(StoneTypeUpdateRequest $request, int $id): JsonResponse
    {
        $data = $request->all();
        $this->stoneTypeService->update($data, $id);

        return response()->json(null, 204);
    }

    /**
     * Remove the specified resource from storage.
     * @throws \Throwable
     */
    public function destroy(int $id): JsonResponse
    {
        $this->stoneTypeService->destroy($id);

        return response()->json(null, 204);
    }
}
