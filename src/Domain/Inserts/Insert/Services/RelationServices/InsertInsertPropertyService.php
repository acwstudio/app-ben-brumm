<?php

declare(strict_types=1);

namespace Domain\Inserts\Insert\Services\RelationServices;

use Domain\Inserts\Insert\Repositories\RelationRepositories\InsertInsertPropertyRepository;
use Domain\Inserts\InsertProperty\Models\InsertProperty;
use Domain\Shared\AbstractRelationsService;

final class InsertInsertPropertyService extends AbstractRelationsService
{
    public function __construct(public InsertInsertPropertyRepository $repository)
    {
    }

    public function index($id): InsertProperty
    {
        return $this->repository->index($id);
    }

    public function update($data, $id): void
    {
        $this->repository->update($data, $id);
    }
}
