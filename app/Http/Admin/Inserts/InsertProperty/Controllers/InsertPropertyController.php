<?php

declare(strict_types=1);

namespace App\Http\Admin\Inserts\InsertProperty\Controllers;

use App\Http\Admin\Inserts\InsertProperty\Requests\InsertPropertyStoreRequest;
use App\Http\Admin\Inserts\InsertProperty\Requests\InsertPropertyUpdateRequest;
use App\Http\Admin\Inserts\InsertProperty\Resources\InsertPropertyCollection;
use App\Http\Admin\Inserts\InsertProperty\Resources\InsertPropertyResource;
use App\Http\Shared\Controller;
use Domain\Inserts\InsertProperty\Models\InsertProperty;
use Domain\Inserts\InsertProperty\Services\InsertPropertyService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

final class InsertPropertyController extends Controller
{
    public function __construct(public InsertPropertyService $insertPropertyService)
    {
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): JsonResponse
    {
        $data = $request->all();
        $items = $this->insertPropertyService->index($data);

        return (new InsertPropertyCollection($items))->response();
    }

    /**
     * Store a newly created resource in storage.
     * @throws \Throwable
     */
    public function store(InsertPropertyStoreRequest $request): JsonResponse
    {
        $data = $request->all();

        $model = $this->insertPropertyService->store($data);

        return (new InsertPropertyResource(InsertProperty::find($model->id)))
            ->response()
            ->header('Location', route('admin.insert-properties.show', [
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
        $model = $this->insertPropertyService->show($data, $id);

        return (new InsertPropertyResource($model))->response();
    }

    /**
     * Update the specified resource in storage.
     * @throws \Throwable
     */
    public function update(InsertPropertyUpdateRequest $request, int $id): JsonResponse
    {
        $data = $request->all();
        $this->insertPropertyService->update($data, $id);

        return response()->json(null, 204);
    }

    /**
     * Remove the specified resource from storage.
     * @throws \Throwable
     */
    public function destroy(int $id): JsonResponse
    {
        $this->insertPropertyService->destroy($id);

        return response()->json(null, 204);
    }
}
