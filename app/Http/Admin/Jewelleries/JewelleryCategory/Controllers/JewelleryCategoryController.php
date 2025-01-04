<?php

declare(strict_types=1);

namespace App\Http\Admin\Jewelleries\JewelleryCategory\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\JewelleryCategories\JewelleryCategoryCollection;
use Domain\Jewelleries\Models\JewelleryCategory;
use Domain\Jewelleries\Services\JewelleryCategory\JewelleryCategoryService;
use Illuminate\Http\Request;

final class JewelleryCategoryController extends Controller
{
    public function __construct(public JewelleryCategoryService $jewelleryCategoryService)
    {
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
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
    public function show(JewelleryCategory $jewelletyCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, JewelleryCategory $jewelletyCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JewelleryCategory $jewelletyCategory)
    {
        //
    }
}
