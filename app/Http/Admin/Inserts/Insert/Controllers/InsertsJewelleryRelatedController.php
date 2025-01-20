<?php

declare(strict_types=1);

namespace App\Http\Admin\Inserts\Insert\Controllers;

use App\Http\Admin\Jewelleries\Jewellery\Resources\JewelleryResource;
use App\Http\Shared\Controller;
use Domain\Inserts\Insert\Models\Insert;
use Domain\Inserts\Insert\Services\RelationServices\InsertsJewelleryRelationsService;
use Illuminate\Http\JsonResponse;

final class InsertsJewelleryRelatedController extends Controller
{
    public function __construct(public InsertsJewelleryRelationsService $insertsJewelleryService)
    {
    }

    public function index(int $id): JsonResponse
    {
        $model = $this->insertsJewelleryService->index($id);
        return (new JewelleryResource($model))->response();
    }
}
