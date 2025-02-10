<?php

declare(strict_types=1);

namespace App\Http\Site\Jewelleries\JewelleryView\Controllers;

use Illuminate\Http\JsonResponse;

final class JewelleryViewController
{
    public function index(): JsonResponse
    {
        return response()->json('OK');
    }
}
