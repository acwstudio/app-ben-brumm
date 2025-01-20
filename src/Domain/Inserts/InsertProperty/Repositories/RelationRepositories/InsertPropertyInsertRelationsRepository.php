<?php

declare(strict_types=1);

namespace Domain\Inserts\InsertProperty\Repositories\RelationRepositories;

use Domain\Inserts\InsertProperty\Models\InsertProperty;
use Domain\Shared\AbstractRelationsRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

final class InsertPropertyInsertRelationsRepository extends AbstractRelationsRepository
{

    public function index(int $id): Model|Collection|InsertProperty
    {
        return InsertProperty::find($id)->insert;
    }

    public function update(array $data, int $id): void
    {
        // TODO: Implement update() method.
    }
}
