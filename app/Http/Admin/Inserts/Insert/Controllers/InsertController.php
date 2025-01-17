<?php

declare(strict_types=1);

namespace App\Http\Admin\Inserts\Insert\Controllers;

use App\Http\Admin\Inserts\Insert\Requests\InsertStoreRequest;
use App\Http\Admin\Inserts\Insert\Requests\InsertUpdateRequest;
use App\Http\Admin\Inserts\Insert\Resources\InsertCollection;
use App\Http\Admin\Inserts\Insert\Resources\InsertResource;
use App\Http\Shared\Controller;
use Domain\Inserts\Insert\Models\Insert;
use Domain\Inserts\Insert\Services\InsertService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

final class InsertController extends Controller
{
    public function __construct(public InsertService $insertService)
    {
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): JsonResponse
    {
        $data = $request->all();
        $items = $this->insertService->index($data);

        return (new InsertCollection($items))->response();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(InsertStoreRequest $request): JsonResponse
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
        $model = $this->insertService->show($id, $data);

        return (new InsertResource($model))->response();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(InsertUpdateRequest $request, Insert $insert): JsonResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id): JsonResponse
    {
        $this->insertService->destroy($id);

        return response()->json(null, 204);
    }
}
