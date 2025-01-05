<?php

declare(strict_types=1);

namespace Domain\Inserts\StoneType\Repositories;

use Domain\Inserts\StoneType\Models\StoneType;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;

interface StoneTypeRepositoryInterface
{
    public function index(array $data): Paginator;

    public function show(int $id, array $data): Model|StoneType;
}
