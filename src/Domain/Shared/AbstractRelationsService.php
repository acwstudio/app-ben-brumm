<?php

declare(strict_types=1);

namespace Domain\Shared;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

abstract class AbstractRelationsService
{
    abstract public function index(int $id): Model|Collection;

    abstract public function update(array $data, int $id): void;
}
