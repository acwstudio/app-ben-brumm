<?php

declare(strict_types=1);

namespace App\Http\Admin\Inserts\Insert\Controllers;

use App\Http\Admin\Inserts\InsertShape\Resources\InsertShapeResource;
use App\Http\Shared\Controller;
use Domain\Inserts\Insert\Models\Insert;
use Illuminate\Http\JsonResponse;

final class InsertsInsertShapeRelatedController extends Controller
{
    public function index(int $id): JsonResponse
    {
        $model = Insert::findOrFail($id)->insertShape;
        return (new InsertShapeResource($model))->response();
    }
}
