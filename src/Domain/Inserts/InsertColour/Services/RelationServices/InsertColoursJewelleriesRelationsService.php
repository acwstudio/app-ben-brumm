<?php

declare(strict_types=1);

namespace Domain\Inserts\InsertColour\Services\RelationServices;

use Domain\Inserts\InsertColour\Repositories\RelationRepositories\InsertColoursJewelleriesRelationsRepository;
use Domain\Shared\AbstractRelationsService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

final class InsertColoursJewelleriesRelationsService extends AbstractRelationsService
{
    public function __construct(public InsertColoursJewelleriesRelationsRepository $repository)
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
