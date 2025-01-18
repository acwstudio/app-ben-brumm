<?php

declare(strict_types=1);

namespace Domain\Inserts\Insert\Services\RelationServices;

use Domain\Inserts\Insert\Repositories\RelationRepositories\InsertsInsertShapeRepository;
use Domain\Inserts\InsertShape\Models\InsertShape;
use Domain\Shared\AbstractRelationsService;

final class InsertsInsertShapeService extends AbstractRelationsService
{
    public function __construct(public InsertsInsertShapeRepository $repository)
    {
    }

    public function index(int $id): InsertShape
    {
        return $this->repository->index($id);
    }

    public function update(array $data, int $id): void
    {
        $this->repository->update($data, $id);
    }
}
