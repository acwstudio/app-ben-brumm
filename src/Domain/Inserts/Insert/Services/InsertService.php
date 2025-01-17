<?php

declare(strict_types=1);

namespace Domain\Inserts\Insert\Services;

use Domain\Inserts\Insert\Models\Insert;
use Domain\Inserts\Insert\Repositories\InsertRepositoryInterface;
use Domain\Shared\AbstractCRUDService;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;

final class InsertService extends AbstractCRUDService
{
    public function __construct(
        public InsertRepositoryInterface $insertRepositoryInterface,
//        public InsertPipeline $insertPipeline
    ) {
    }

    public function index(array $data): Paginator
    {
        return $this->insertRepositoryInterface->index($data);
    }

    public function store(array $data): Insert
    {
        // TODO: Implement store() method.
    }

    public function show(int $id, array $data): Insert
    {
        return $this->insertRepositoryInterface->show($id, $data);
    }

    public function update(array $data): void
    {
        $this->insertRepositoryInterface->update($data);
    }

    public function destroy(int $id): void
    {
        $this->insertRepositoryInterface->destroy($id);
    }
}
