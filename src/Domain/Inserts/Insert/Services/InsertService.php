<?php

declare(strict_types=1);

namespace Domain\Inserts\Insert\Services;

use Domain\Inserts\Insert\Models\Insert;
use Domain\Inserts\Insert\Pipelines\InsertPipeline;
use Domain\Inserts\Insert\Repositories\InsertRepositoryInterface;
use Domain\Shared\AbstractCRUDService;
use Illuminate\Contracts\Pagination\Paginator;
use Throwable;

final class InsertService extends AbstractCRUDService
{
    public function __construct(
        public InsertRepositoryInterface $insertRepositoryInterface,
        public InsertPipeline $insertPipeline
    ) {
//        if (!auth('employee')->user()->can('index', Insert::class)) {
//            abort(403, 'Access to the requested resource is forbidden.');
//        }
    }

    public function index(array $data): Paginator
    {
        return $this->insertRepositoryInterface->index($data);
    }

    /**
     * @throws Throwable
     */
    public function store(array $data): Insert
    {
        return $this->insertPipeline->store($data);
    }

    public function show(array $data, int $id): Insert
    {
        return $this->insertRepositoryInterface->show($data, $id);
    }

    /**
     * @throws Throwable
     */
    public function update(array $data, int $id): void
    {
        $this->insertPipeline->update($data, $id);
    }

    /**
     * @throws Throwable
     */
    public function destroy(int $id): void
    {
        $this->insertPipeline->destroy($id);
    }
}
