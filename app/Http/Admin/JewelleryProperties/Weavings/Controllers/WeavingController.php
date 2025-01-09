<?php

declare(strict_types=1);

namespace App\Http\Admin\JewelleryProperties\Weavings\Controllers;

use App\Http\Admin\JewelleryProperties\Weavings\Requests\WeavingStoreRequest;
use App\Http\Admin\JewelleryProperties\Weavings\Resources\WeavingCollection;
use App\Http\Admin\JewelleryProperties\Weavings\Resources\WeavingResource;
use Domain\JewelleryProperties\Weaving\Models\Weaving;
use Domain\JewelleryProperties\Weaving\Services\WeavingService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

final class WeavingController
{
    public function __construct(public WeavingService $weavingService)
    {
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): JsonResponse
    {
        $data = $request->all();
        $items = $this->weavingService->index($data);

        return (new WeavingCollection($items))->response();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(WeavingStoreRequest $request): JsonResponse
    {
        $data = $request->all();

        $weaving = $this->weavingService->store($data);

        return (new WeavingResource(Weaving::find($weaving->id)))
            ->response()
            ->header('Location', route('admin.weavings.show', [
                'id' => $weaving->id
            ]));
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, int $id): JsonResponse
    {
        $data = $request->all();
        data_set($data, 'id', $id);
        $model = $this->weavingService->show($id, $data);

        return (new WeavingResource($model))->response();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Weaving $weaving)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Weaving $weaving)
    {
        //
    }
}
