<?php

declare(strict_types=1);

namespace Domain\Shared;

use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;

interface CRUDRepositoryInterface
{
    public function index(array $data): Paginator;

    public function store(array $data): Model;

    public function show(array $data, int $id): Model;

    public function update(array $data, int $id): void;

    public function destroy(int $id): void;
}
