<?php

declare(strict_types=1);

namespace Domain\Inserts\Stone\Repositories;

use Domain\Inserts\Stone\Models\Stone;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;

interface StoneRepositoryInterface
{
    public function index(array $data): Paginator;

    public function show(int $id, array $data): Model|Stone;
}
