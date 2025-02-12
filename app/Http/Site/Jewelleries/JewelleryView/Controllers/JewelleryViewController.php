<?php

declare(strict_types=1);

namespace App\Http\Site\Jewelleries\JewelleryView\Controllers;

use Domain\Site\JewelleryPropView;
use Illuminate\Http\JsonResponse;

final class JewelleryViewController
{
    public function index(): JsonResponse
    {
        return response()->json(JewelleryPropView::all());
    }

    public function show(int $id): JsonResponse
    {
        return response()->json(JewelleryPropView::find($id)->discounts);
    }
}
