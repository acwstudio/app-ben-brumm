<?php

declare(strict_types=1);

namespace App\Http\Admin\Inserts\Insert\Controllers;

use App\Http\Admin\Inserts\InsertProperty\Resources\InsertPropertyResource;
use App\Http\Shared\Controller;
use Domain\Inserts\Insert\Models\Insert;
use Illuminate\Http\JsonResponse;

final class InsertInsertPropertyRelatedController extends Controller
{
    public function index(int $id): JsonResponse
    {
        $model = Insert::findOrFail($id)->insertProperty;
        return (new InsertPropertyResource($model))->response();
    }
}
