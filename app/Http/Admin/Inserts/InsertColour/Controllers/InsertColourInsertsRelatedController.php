<?php

declare(strict_types=1);

namespace App\Http\Admin\Inserts\InsertColour\Controllers;

use App\Http\Admin\Inserts\Insert\Resources\InsertCollection;
use App\Http\Shared\Controller;
use Domain\Inserts\InsertColour\Models\InsertColour;
use Illuminate\Http\JsonResponse;

final class InsertColourInsertsRelatedController extends Controller
{
    public function index(int $id): JsonResponse
    {
        $model = InsertColour::findOrFail($id)->inserts;
        return (new InsertCollection($model))->response();
    }
}
