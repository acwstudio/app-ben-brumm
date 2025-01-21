<?php

declare(strict_types=1);

namespace Domain\Inserts\Stone\Repositories\RelationRepositories;

use Domain\Inserts\Stone\Models\Stone;
use Domain\Shared\AbstractRelationsRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

final class StonesStoneTypeRelationsRepository extends AbstractRelationsRepository
{
    public function index(int $id): Model|Collection
    {
        return Stone::find($id)->stoneType;
    }

    public function update(array $data, int $id): void
    {
        Stone::find($id)->update([
            'stone_type_id' => data_get($data, 'data.id'),
        ]);
    }
}
