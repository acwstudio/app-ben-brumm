<?php

declare(strict_types=1);

namespace Domain\Inserts\InsertProperty\Services;

use Domain\Inserts\InsertProperty\Models\InsertProperty;
use Domain\Inserts\InsertProperty\Pipelines\InsertPropertyPipeline;
use Domain\Inserts\InsertProperty\Repositories\InsertPropertyRepository;
use Domain\Shared\AbstractCRUDService;
use Illuminate\Contracts\Pagination\Paginator;

final class InsertPropertyService extends AbstractCRUDService
{
    public function __construct(
        public InsertPropertyRepository $insertPropertyRepository,
        public InsertPropertyPipeline   $insertPropertyPipeline
    ) {
    }

    public function index(array $data): Paginator
    {
        return $this->insertPropertyRepository->index($data);
    }

    /**
     * @throws \Throwable
     */
    public function store(array $data): InsertProperty
    {
        return $this->insertPropertyPipeline->store($data);
    }

    public function show(array $data, int $id): InsertProperty
    {
        return $this->insertPropertyRepository->show($data, $id);
    }

    /**
     * @throws \Throwable
     */
    public function update(array $data, int $id): void
    {
        $this->insertPropertyPipeline->update($data, $id);
    }

    /**
     * @throws \Throwable
     */
    public function destroy(int $id): void
    {
        $this->insertPropertyPipeline->destroy($id);
    }
}
