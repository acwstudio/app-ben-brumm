<?php

declare(strict_types=1);

namespace Domain\Inserts\InsertColour\Services\RelationServices;

use Domain\Inserts\Insert\Models\Insert;
use Domain\Inserts\InsertColour\Repositories\RelationRepositories\InsertColourInsertsRepository;
use Domain\Shared\AbstractRelationsService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

final class InsertColourInsertsService extends AbstractRelationsService
{
    public function __construct(public InsertColourInsertsRepository $repository)
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
