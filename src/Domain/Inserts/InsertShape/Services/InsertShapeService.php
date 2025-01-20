<?php

declare(strict_types=1);

namespace Domain\Inserts\InsertShape\Services;

use Domain\Inserts\InsertShape\Models\InsertShape;
use Domain\Inserts\InsertShape\Pipelines\InsertShapePipeline;
use Domain\Inserts\InsertShape\Repositories\InsertShapeRepositoryInterface;
use Domain\Shared\AbstractCRUDService;
use Illuminate\Contracts\Pagination\Paginator;

final class InsertShapeService extends AbstractCRUDService
{
    public function __construct(
        public InsertShapeRepositoryInterface $insertShapeRepositoryInterface,
        public InsertShapePipeline $insertShapePipeline
    ) {
    }

    public function index(array $data): Paginator
    {
        return $this->insertShapeRepositoryInterface->index($data);
    }

    /**
     * @throws \Throwable
     */
    public function store(array $data): InsertShape
    {
        return $this->insertShapePipeline->store($data);
    }

    public function show(array $data, int $id): InsertShape
    {
        return $this->insertShapeRepositoryInterface->show($data, $id);
    }

    /**
     * @throws \Throwable
     */
    public function update(array $data, $id): void
    {
        $this->insertShapePipeline->update($data, $id);
    }

    /**
     * @throws \Throwable
     */
    public function destroy(int $id): void
    {
        $this->insertShapePipeline->destroy($id);
    }
}
