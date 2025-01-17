<?php

declare(strict_types=1);

namespace Domain\Inserts\InsertProperty\Repositories;

use Domain\Inserts\InsertProperty\Models\InsertProperty;
use Domain\Shared\CRUDRepositoryInterface;

interface InsertPropertyInterface extends CRUDRepositoryInterface
{
    public function store(array $data): InsertProperty;

    public function show(int $id, array $data): InsertProperty;
}
