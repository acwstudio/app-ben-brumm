<?php

declare(strict_types=1);

namespace Domain\Inserts\Insert\Repositories\RelationRepositories;

use Domain\Inserts\Insert\Models\Insert;
use Domain\Inserts\InsertShape\Models\InsertShape;
use Domain\Shared\AbstractRelationsRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

final class InsertsInsertShapeRepository extends AbstractRelationsRepository
{

    public function index(int $id): Model|Collection|InsertShape
    {
        return Insert::find($id)->insertShape;
    }

    public function update(array $data, int $id): void
    {
        Insert::find($id)->update([
            'insert_shape_id' => data_get($data, 'data.id'),
        ]);
    }
}
