<?php

declare(strict_types=1);

namespace App\Http\Admin\Inserts\Stone\Controllers;

use App\Http\Admin\Jewelleries\Jewellery\Resources\JewelleryCollection;
use Domain\Inserts\Stone\Services\RelationServices\StonesJewelleriesRelationsService;
use Illuminate\Http\JsonResponse;

final class StonesJewelleriesRelatedController
{
    public function __construct(public StonesJewelleriesRelationsService $service)
    {
    }

    public function index(int $id): JsonResponse
    {
        $collection = $this->service->index($id);

        return (new JewelleryCollection($collection))->response();
    }
}
