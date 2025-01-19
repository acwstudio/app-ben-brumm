<?php

declare(strict_types=1);

namespace Domain\Inserts\InsertColour\Services;

use Domain\Inserts\InsertColour\Models\InsertColour;
use Domain\Inserts\InsertColour\Pipelines\InsertColourPipeline;
use Domain\Inserts\InsertColour\Repositories\InsertColourRepositoryInterface;
use Domain\Shared\AbstractCRUDService;
use Illuminate\Contracts\Pagination\Paginator;

final class InsertColourService extends AbstractCRUDService
{
    public function __construct(
        public InsertColourRepositoryInterface $insertColourRepositoryInterface,
        public InsertColourPipeline $insertColourPipeline
    ) {
    }

    public function index(array $data): Paginator
    {
        return $this->insertColourRepositoryInterface->index($data);
    }

    /**
     * @throws \Throwable
     */
    public function store(array $data): InsertColour
    {
        return $this->insertColourPipeline->store($data);
    }

    public function show(array $data, int $id): InsertColour
    {
        return $this->insertColourRepositoryInterface->show($data, $id);
    }

    /**
     * @throws \Throwable
     */
    public function update(array $data, int $id): void
    {
        $this->insertColourPipeline->update($data, $id);
    }

    /**
     * @throws \Throwable
     */
    public function destroy(int $id): void
    {
        $this->insertColourPipeline->destroy($id);
    }
}
