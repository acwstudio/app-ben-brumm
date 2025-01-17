<?php

declare(strict_types=1);

namespace App\Http\Admin\Inserts\InsertColour\Controllers;

use App\Http\Admin\Shared\Resources\Identifiers\ApiEntityIdentifierResource;
use App\Http\Shared\Controller;
use Domain\Inserts\InsertColour\Models\InsertColour;
use Illuminate\Http\JsonResponse;

final class InsertColourInsertsRelationshipsController extends Controller
{
    public function index(int $id): JsonResponse
    {
        $collection = InsertColour::findOrFail($id)->inserts;
        return ApiEntityIdentifierResource::collection($collection)->response();
    }

    public function update()
    {

    }
}
