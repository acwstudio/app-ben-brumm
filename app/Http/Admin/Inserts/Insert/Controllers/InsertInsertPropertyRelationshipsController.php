<?php

declare(strict_types=1);

namespace App\Http\Admin\Inserts\Insert\Controllers;

use App\Http\Admin\Inserts\Insert\Requests\InsertInsertPropertyUpdateRelationsRequest;
use App\Http\Admin\Shared\Resources\Identifiers\ApiEntityIdentifierResource;
use App\Http\Shared\Controller;
use Domain\Inserts\Insert\Models\Insert;
use Illuminate\Http\JsonResponse;

final class InsertInsertPropertyRelationshipsController extends Controller
{
    public function index(int $id): JsonResponse
    {
        $model = Insert::findOrFail($id)->insertProperty;
        return (new ApiEntityIdentifierResource($model))->response();
    }

    public function update(InsertInsertPropertyUpdateRelationsRequest $request, int $id): JsonResponse
    {
        Insert::find($id)->update([
            'insert_property_id' => $request->input('data.id'),
        ]);

        return response()->json(null, 204);
    }
}
