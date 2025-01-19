<?php

declare(strict_types=1);

namespace Domain\Shared;

use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;

abstract class AbstractCRUDService
{
    abstract public function index(array $data): Paginator;

    abstract public function store(array $data): Model;

    abstract public function show(array $data, int $id): Model;

    abstract public function update(array $data, int $id): void;

    abstract public function destroy(int $id): void;
}
