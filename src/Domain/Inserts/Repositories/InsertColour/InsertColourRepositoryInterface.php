<?php

declare(strict_types=1);

namespace Domain\Inserts\Repositories\InsertColour;

use Domain\Inserts\Models\InsertColour;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;

interface InsertColourRepositoryInterface
{
    public function index(array $data): Paginator;

    public function show(int $id, array $data): Model|InsertColour;
}
