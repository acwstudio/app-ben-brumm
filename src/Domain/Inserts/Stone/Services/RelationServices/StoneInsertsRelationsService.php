<?php

declare(strict_types=1);

namespace Domain\Inserts\Stone\Services\RelationServices;

use Domain\Inserts\Stone\Repositories\RelationRepositories\StoneInsertsRelationsRepository;
use Domain\Shared\AbstractRelationsService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

final class StoneInsertsRelationsService extends AbstractRelationsService
{
    public function __construct(public StoneInsertsRelationsRepository $repository)
    {
    }

    public function index(int $id): Model|Collection
    {
        return $this->repository->index($id);
    }

    public function update(array $data, int $id): void
    {
        $this->repository->update($data, $id);
    }
}
