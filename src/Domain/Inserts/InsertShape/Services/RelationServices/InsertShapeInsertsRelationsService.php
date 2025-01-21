<?php

declare(strict_types=1);

namespace Domain\Inserts\InsertShape\Services\RelationServices;

use Domain\Inserts\Insert\Models\Insert;
use Domain\Inserts\InsertShape\Repositories\RelationRepositories\InsertShapeInsertsRelationsRepository;
use Domain\Shared\AbstractRelationsService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

final class InsertShapeInsertsRelationsService extends AbstractRelationsService
{
    public function __construct(public InsertShapeInsertsRelationsRepository $repository)
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
