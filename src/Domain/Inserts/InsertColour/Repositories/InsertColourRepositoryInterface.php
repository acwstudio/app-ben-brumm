<?php

declare(strict_types=1);

namespace Domain\Inserts\InsertColour\Repositories;

use Domain\Inserts\InsertColour\Models\InsertColour;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;

interface InsertColourRepositoryInterface
{
    public function index(array $data): Paginator;

    public function show(int $id, array $data): Model|InsertColour;
}
