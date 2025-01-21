<?php

declare(strict_types=1);

namespace Domain\Inserts\Stone\Repositories\RelationRepositories;

use Domain\Inserts\Stone\Models\Stone;
use Domain\Shared\AbstractRelationsRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

final class StonesJewelleriesRelationsRepository extends AbstractRelationsRepository
{
    public function index(int $id): Model|Collection
    {
        return Stone::find($id)->jewelleries;
    }

    public function update(array $data, int $id): void
    {
        // TODO: Implement update() method.
    }
}
