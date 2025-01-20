<?php

declare(strict_types=1);

namespace Domain\Inserts\InsertProperty\Services\RelationServices;

use Domain\Inserts\InsertProperty\Models\InsertProperty;
use Domain\Inserts\InsertProperty\Repositories\RelationRepositories\InsertPropertyInsertRelationsRepository;
use Domain\Shared\AbstractRelationsService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

final class InsertPropertyInsertRelationsService extends AbstractRelationsService
{
    public function __construct(public InsertPropertyInsertRelationsRepository $repository)
    {
    }

    public function index(int $id): Model|Collection|InsertProperty
    {
        return $this->repository->index($id);
    }

    public function update(array $data, int $id): void
    {
        $this->repository->update($data, $id);
    }
}
