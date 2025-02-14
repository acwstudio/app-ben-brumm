<?php

declare(strict_types=1);

namespace App\Http\Site\Jewelleries\BraceletPropView\Controllers;

use App\Http\Shared\Controller;
use Domain\Views\BraceletPropViews\Models\BraceletPropView;
use Illuminate\Http\JsonResponse;

final class BraceletPropViewController extends Controller
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
