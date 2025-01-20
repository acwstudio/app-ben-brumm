<?php

declare(strict_types=1);

namespace Domain\Inserts\InsertShape\Repositories;

use Domain\Inserts\InsertShape\Models\InsertShape;
use Illuminate\Contracts\Pagination\Paginator;

interface InsertShapeRepositoryInterface
{
    public function index(array $data): Paginator;

    public function show(array $data, int $id): InsertShape;
}
