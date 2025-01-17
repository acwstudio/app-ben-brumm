<?php

declare(strict_types=1);

namespace Domain\Inserts\InsertShape\Repositories;

use Domain\Inserts\InsertShape\Models\InsertShape;
use Domain\Shared\CRUDRepositoryInterface;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;

interface InsertShapeRepositoryInterface extends CRUDRepositoryInterface
{
    public function store(array $data): InsertShape;

    public function show(int $id, array $data): InsertShape;
}
