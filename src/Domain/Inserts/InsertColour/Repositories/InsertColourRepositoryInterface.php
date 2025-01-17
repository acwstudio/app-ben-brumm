<?php

declare(strict_types=1);

namespace Domain\Inserts\InsertColour\Repositories;

use Domain\Inserts\InsertColour\Models\InsertColour;
use Domain\Shared\CRUDRepositoryInterface;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;

interface InsertColourRepositoryInterface extends CRUDRepositoryInterface
{
    public function store(array $data): InsertColour;

    public function show(int $id, array $data): InsertColour;
}
