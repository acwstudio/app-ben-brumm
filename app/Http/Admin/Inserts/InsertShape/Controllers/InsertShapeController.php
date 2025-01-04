<?php

declare(strict_types=1);

namespace App\Http\Admin\Inserts\InsertShape\Controllers;

use App\Http\Admin\Inserts\InsertShape\Resources\InsertShapeCollection;
use App\Http\Controllers\Controller;
use Domain\Inserts\Models\InsertShape;
use Domain\Inserts\Services\InsertShape\InsertShapeService;
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(InsertShape $insertShape)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, InsertShape $insertShape)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InsertShape $insertShape)
    {
        //
    }
}
