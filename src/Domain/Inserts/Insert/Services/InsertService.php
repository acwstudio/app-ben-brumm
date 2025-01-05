<?php

declare(strict_types=1);

namespace Domain\Inserts\Insert\Services;

use Domain\Inserts\Insert\Models\Insert;
use Domain\Inserts\Insert\Repositories\InsertRepositoryInterface;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;

final class InsertService implements InsertRepositoryInterface
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

    public function show(int $id, array $data): Model|Insert
    {
        // TODO: Implement show() method.
    }
}
