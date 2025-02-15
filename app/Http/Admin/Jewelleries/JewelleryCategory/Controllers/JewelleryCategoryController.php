<?php

declare(strict_types=1);

namespace App\Http\Admin\Jewelleries\JewelleryCategory\Controllers;

use App\Http\Admin\Jewelleries\JewelleryCategory\Resources\JewelleryCategoryCollection;
use App\Http\Shared\Controller;
use Domain\Jewelleries\JewelleryCategory\Models\JewelleryCategory;
use Domain\Jewelleries\JewelleryCategory\Services\JewelleryCategoryService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

final class JewelleryCategoryController extends Controller
{
    public function __construct(public JewelleryCategoryService $jewelleryCategoryService)
    {
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): JsonResponse
    {
        $data = $request->all();
        $items = $this->jewelleryCategoryService->index($data);

        return (new JewelleryCategoryCollection($items))->response();
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
    public function show(JewelleryCategory $jewelleryCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, JewelleryCategory $jewelleryCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JewelleryCategory $jewelleryCategory)
    {
        //
    }
}
