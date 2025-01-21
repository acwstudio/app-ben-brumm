<?php

declare(strict_types=1);

namespace Domain\Inserts\Stone\Services\RelationServices;

use Domain\Inserts\Stone\Repositories\RelationRepositories\StonesJewelleriesRelationsRepository;
use Domain\Shared\AbstractRelationsService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

final class StonesJewelleriesRelationsService extends AbstractRelationsService
{
    public function __construct(public StonesJewelleriesRelationsRepository $repository)
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
