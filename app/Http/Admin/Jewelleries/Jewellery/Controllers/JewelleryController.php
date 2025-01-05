<?php

declare(strict_types=1);

namespace App\Http\Admin\Jewelleries\Jewellery\Controllers;

use App\Http\Admin\Jewelleries\Jewellery\Resources\JewelleryCollection;
use App\Http\Shared\Controller;
use Domain\Jewelleries\Jewellery\Models\Jewellery;
use Domain\Jewelleries\Jewellery\Services\JewelleryService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

final class JewelleryController extends Controller
{
    public function __construct(public JewelleryService $jewelleryService)
    {
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): JsonResponse
    {
        $data = $request->all();
        $items = $this->jewelleryService->index($data);

        return (new JewelleryCollection($items))->response();
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
    public function show(Request $request, int $id)
    {
        $data = $request->all();
        data_set($data, 'id', $id);
        $model = $this->jewelleryService->show($id, $data);
        return $model;
//        return (new BannerResource($model))->response();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Jewellery $jewelleries)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jewellery $jewelleries)
    {
        //
    }
}
