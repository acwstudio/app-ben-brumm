<?php

declare(strict_types=1);

namespace Domain\Inserts\Insert\Services\RelationServices;

use Domain\Inserts\Insert\Repositories\RelationRepositories\InsertsJewelleryRepository;
use Domain\Shared\AbstractRelationsService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

final class InsertsJewelleryService extends AbstractRelationsService
{
    public function __construct(public InsertsJewelleryRepository $repository)
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
