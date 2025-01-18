<?php

declare(strict_types=1);

namespace Domain\Inserts\Insert\Repositories\RelationRepositories;

use Domain\Inserts\Insert\Models\Insert;
use Domain\Inserts\InsertProperty\Models\InsertProperty;
use Domain\Shared\AbstractRelationsRepository;

final class InsertInsertPropertyRepository extends AbstractRelationsRepository
{
    public function index(int $id): InsertProperty
    {
        return Insert::find($id)->insertProperty;
    }

    public function update(array $data, int $id): void
    {
        Insert::find($id)->update([
            'insert_property_id' => data_get($data, 'data.id'),
        ]);
    }
}
