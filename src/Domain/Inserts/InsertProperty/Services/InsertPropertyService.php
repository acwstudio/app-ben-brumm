<?php

declare(strict_types=1);

namespace Domain\Inserts\InsertProperty\Services;

use Domain\Inserts\InsertProperty\Models\InsertProperty;
use Domain\Inserts\InsertProperty\Repositories\InsertPropertyRepository;
use Domain\Shared\AbstractCRUDService;
use Illuminate\Contracts\Pagination\Paginator;

final class InsertPropertyService extends AbstractCRUDService
{
    public function __construct(
        public InsertPropertyRepository $insertPropertyRepository,
//        public InsertPropertyPipeline $insertPropertyPipeline
    ) {
    }

    public function index(array $data): Paginator
    {
        return $this->insertPropertyRepository->index($data);
    }

    public function store(array $data): InsertProperty
    {
        // TODO: Implement store() method.
    }

    public function show(int $id, array $data): InsertProperty
    {
        return $this->insertPropertyRepository->show($id, $data);
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
