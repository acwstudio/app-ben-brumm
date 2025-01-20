<?php

declare(strict_types=1);

namespace App\Http\Admin\Inserts\InsertShape\Controllers;

use App\Http\Admin\Inserts\InsertShape\Requests\InsertShapeStoreRequest;
use App\Http\Admin\Inserts\InsertShape\Requests\InsertShapeUpdateRequest;
use App\Http\Admin\Inserts\InsertShape\Resources\InsertShapeCollection;
use App\Http\Admin\Inserts\InsertShape\Resources\InsertShapeResource;
use App\Http\Shared\Controller;
use Domain\Inserts\InsertShape\Models\InsertShape;
use Domain\Inserts\InsertShape\Services\InsertShapeService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

final class InsertShapeController extends Controller
{
    public function __construct(public InsertShapeService $insertShapeService)
    {
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): JsonResponse
    {
        $data = $request->all();
        $items = $this->insertShapeService->index($data);

        return (new InsertShapeCollection($items))->response();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(InsertShapeStoreRequest $request): JsonResponse
    {
        $data = $request->all();
        $model = $this->insertShapeService->store($data);

        return (new InsertShapeResource(InsertShape::find($model->id)))
            ->response()
            ->header('Location', route('admin.insert-shapes.show', [
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
        $model = $this->insertShapeService->show($data, $id);

        return (new InsertShapeResource($model))->response();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(InsertShapeUpdateRequest $request, int $id): JsonResponse
    {
        $data = $request->all();
        $this->insertShapeService->update($data, $id);

        return response()->json(null, 204);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id): JsonResponse
    {
        $this->insertShapeService->destroy($id);

        return response()->json(null, 204);
    }
}
