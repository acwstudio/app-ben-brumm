<?php

declare(strict_types=1);

namespace Domain\Inserts\InsertShape\Services\RelationServices;

use Domain\Inserts\InsertShape\Repositories\RelationRepositories\InsertShapeSJewelleriesRelationsRepository;
use Domain\Shared\AbstractRelationsService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

final class InsertShapeJewelleriesRelationsService extends AbstractRelationsService
{
    public function __construct(public InsertShapeSJewelleriesRelationsRepository $repository)
    {
    }

    public function index(int $id): Model|Collection
    {
        return $this->repository->index($id);
    }

    public function update(array $data, int $id): void
    {
        // TODO: Implement update() method.
    }
}
