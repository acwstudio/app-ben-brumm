<?php

declare(strict_types=1);

namespace Domain\Inserts\Repositories\Stone;

use Domain\Inserts\Models\Stone;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;

interface StoneRepositoryInterface
{
    public function index(array $data): Paginator;

    public function show(int $id, array $data): Model|Stone;
}
