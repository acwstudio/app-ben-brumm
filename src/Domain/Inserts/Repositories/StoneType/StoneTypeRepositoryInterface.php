<?php

declare(strict_types=1);

namespace Domain\Inserts\Repositories\StoneType;

use Domain\Inserts\Models\StoneType;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;

interface StoneTypeRepositoryInterface
{
    public function index(array $data): Paginator;

    public function show(int $id, array $data): Model|StoneType;
}
