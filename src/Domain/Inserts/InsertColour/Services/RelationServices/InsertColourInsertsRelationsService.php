<?php

declare(strict_types=1);

namespace Domain\Inserts\InsertColour\Services\RelationServices;

use Domain\Inserts\Insert\Models\Insert;
use Domain\Inserts\InsertColour\Repositories\RelationRepositories\InsertColourInsertsRelationsRepository;
use Domain\Shared\AbstractRelationsService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

final class InsertColourInsertsRelationsService extends AbstractRelationsService
{
    public function __construct(public InsertColourInsertsRelationsRepository $repository)
    {
    }

    public function index(int $id): Model|Collection|Insert
    {
        return $this->repository->index($id);
    }

    public function update(array $data, int $id): void
    {
        $this->repository->update($data, $id);
    }
}
