<?php

declare(strict_types=1);

namespace Domain\Inserts\Insert\Repositories\RelationRepositories;

use Domain\Inserts\Insert\Models\Insert;
use Domain\Inserts\InsertColour\Models\InsertColour;
use Domain\Shared\AbstractRelationsRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

final class InsertsInsertColourRepository extends AbstractRelationsRepository
{
    public function index(int $id): Model|Collection|InsertColour
    {
        return Insert::find($id)->insertColour;
    }

    public function update(array $data, int $id): void
    {
        Insert::find($id)->update([
            'insert_colour_id' => data_get($data, 'data.id'),
        ]);
    }
}
