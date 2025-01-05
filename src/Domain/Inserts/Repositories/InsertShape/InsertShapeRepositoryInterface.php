<?php

declare(strict_types=1);

namespace Domain\Inserts\Repositories\InsertShape;

use Domain\Inserts\Models\InsertShape;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;

interface InsertShapeRepositoryInterface
{
    public function index(array $data): Paginator;

    public function show(int $id, array $data): Model|InsertShape;
}
