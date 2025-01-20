<?php

declare(strict_types=1);

namespace Domain\Inserts\InsertProperty\Repositories\RelationRepositories;

use Domain\Inserts\Insert\Models\Insert;
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
        $insertId = InsertProperty::find($id)->insert->id;
        Insert::find($insertId)->update([
            'insert_property_id' => data_get($data, 'data.id'),
        ]);
    }
}
