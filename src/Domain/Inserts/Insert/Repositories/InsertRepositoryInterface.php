<?php

declare(strict_types=1);

namespace Domain\Inserts\Insert\Repositories;

use Domain\Inserts\Insert\Models\Insert;
use Domain\Shared\CRUDRepositoryInterface;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;

interface InsertRepositoryInterface extends CRUDRepositoryInterface
{
    public function store(array $data): Insert;

    public function show(int $id, array $data): Insert;
}
