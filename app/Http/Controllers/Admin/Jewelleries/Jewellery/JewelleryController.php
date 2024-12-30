<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin\Jewelleries\Jewellery;

use App\Http\Controllers\Controller;
use App\Http\Resources\Jewelleries\JewelleryCollection;
use Domain\Jewelleries\Models\Jewellery;
use Domain\Jewelleries\Services\JewelleryService;
use Illuminate\Http\Request;

final class JewelleryController extends Controller
{
    public function __construct(public JewelleryService $jewelleryService)
    {
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $data = $request->all();
//        dd($data);
        $items = $this->jewelleryService->index($data);

//        return $items;
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
