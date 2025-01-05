<?php

declare(strict_types=1);

namespace App\Http\Admin\Inserts\Insert\Controllers;

use App\Http\Admin\Inserts\Insert\Resources\InsertCollection;
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Insert $insert)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Insert $insert)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Insert $insert)
    {
        //
    }
}
