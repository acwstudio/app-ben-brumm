<?php

declare(strict_types=1);

namespace App\Http\Admin\Inserts\InsertProperty\Controllers;

use App\Http\Admin\Inserts\InsertProperty\Resources\InsertPropertyCollection;
use App\Http\Shared\Controller;
use Domain\Inserts\Models\InsertProperty;
use Domain\Inserts\Services\InsertProperty\InsertPropertyService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class InsertPropertyController extends Controller
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
//        dd($items);
        return (new InsertPropertyCollection($items))->response();
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
    public function show(InsertProperty $insertProperty)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, InsertProperty $insertProperty)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InsertProperty $insertProperty)
    {
        //
    }
}
