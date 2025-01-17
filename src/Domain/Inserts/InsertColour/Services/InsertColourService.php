<?php

declare(strict_types=1);

namespace Domain\Inserts\InsertColour\Services;

use Domain\Inserts\InsertColour\Models\InsertColour;
use Domain\Inserts\InsertColour\Repositories\InsertColourRepositoryInterface;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;

final class InsertColourService implements InsertColourRepositoryInterface
{
    public function __construct(
        public InsertColourRepositoryInterface $insertColourRepositoryInterface,
//        public InsertColourPipeline $insertColourPipeline
    ) {
    }

    public function index(array $data): Paginator
    {
        return $this->insertColourRepositoryInterface->index($data);
    }

    public function store(array $data): InsertColour
    {
        // TODO: Implement store() method.
    }

    public function show(int $id, array $data): InsertColour
    {
        return $this->insertColourRepositoryInterface->show($id, $data);
    }

    public function update(array $data): void
    {
        // TODO: Implement update() method.
    }

    public function destroy(int $id): void
    {
        // TODO: Implement destroy() method.
    }
}
