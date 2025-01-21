<?php

declare(strict_types=1);

namespace Domain\Inserts\InsertShape\Repositories\RelationRepositories;

use Domain\Inserts\InsertShape\Models\InsertShape;
use Domain\Shared\AbstractRelationsRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

final class InsertShapeSJewelleriesRelationsRepository extends AbstractRelationsRepository
{

    public function index(int $id): Model|Collection
    {
        return InsertShape::find($id)->jewelleries;
    }

    public function update(array $data, int $id): void
    {
        // TODO: Implement update() method.
    }
}
