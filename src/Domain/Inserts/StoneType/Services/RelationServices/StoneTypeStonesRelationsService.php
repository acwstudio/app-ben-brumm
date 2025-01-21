<?php

declare(strict_types=1);

namespace Domain\Inserts\StoneType\Services\RelationServices;

use Domain\Inserts\Stone\Models\Stone;
use Domain\Inserts\StoneType\Repositories\RelationRepositories\StoneTypeStonesRelationsRepository;
use Domain\Shared\AbstractRelationsService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

final class StoneTypeStonesRelationsService extends AbstractRelationsService
{
    public function __construct(public StoneTypeStonesRelationsRepository $repository)
    {
    }

    public function index(int $id): Model|Collection|Stone
    {
        return $this->repository->index($id);
    }

    public function update(array $data, int $id): void
    {
        $this->repository->update($data, $id);
    }
}
