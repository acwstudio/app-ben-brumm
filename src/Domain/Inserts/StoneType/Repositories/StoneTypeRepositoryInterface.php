<?php

declare(strict_types=1);

namespace Domain\Inserts\StoneType\Repositories;

use Domain\Inserts\StoneType\Models\StoneType;
use Domain\Shared\CRUDRepositoryInterface;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;

interface StoneTypeRepositoryInterface
{
    public function index(array $data): Paginator;

    public function show(array $data, int $id): Model|StoneType;
}
