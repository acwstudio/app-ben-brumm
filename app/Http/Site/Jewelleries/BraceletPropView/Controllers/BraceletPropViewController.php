<?php

namespace App\Http\Site\Jewelleries\BraceletPropView\Controllers;

use App\Http\Shared\Controller;
use Domain\Site\BraceletPropView;
use Illuminate\Http\JsonResponse;

class BraceletPropViewController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json(BraceletPropView::all());
    }

    public function show(int $id): JsonResponse
    {
        return response()->json(BraceletPropView::find($id));
    }
}
