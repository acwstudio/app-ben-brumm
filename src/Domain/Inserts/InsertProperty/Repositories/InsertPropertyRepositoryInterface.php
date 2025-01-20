<?php

declare(strict_types=1);

namespace Domain\Inserts\InsertProperty\Repositories;

use Domain\Inserts\InsertProperty\Models\InsertProperty;
use Illuminate\Contracts\Pagination\Paginator;

interface InsertPropertyRepositoryInterface
{
    public function index(array $data): Paginator;

    public function show(array $data, int $id): InsertProperty;
}
