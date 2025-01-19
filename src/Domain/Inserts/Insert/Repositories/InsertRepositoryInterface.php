<?php

declare(strict_types=1);

namespace Domain\Inserts\Insert\Repositories;

use Domain\Inserts\Insert\Models\Insert;
use Illuminate\Contracts\Pagination\Paginator;

interface InsertRepositoryInterface
{
    public function index(array $data): Paginator;

    public function show(array $data, int $id): Insert;
}
