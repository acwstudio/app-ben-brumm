<?php

declare(strict_types=1);

namespace Domain\Inserts\StoneType\Repositories\RelationRepositories;

use Domain\Inserts\Stone\Models\Stone;
use Domain\Inserts\StoneType\Models\StoneType;
use Domain\Shared\AbstractRelationsRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

final class StoneTypeStonesRelationsRepository extends AbstractRelationsRepository
{

    public function index(int $id): Model|Collection|Stone
    {
        return StoneType::find($id)->stones;
    }

    public function update(array $data, int $id): void
    {
        $ids = data_get($data, 'data.*.id');

        foreach ($ids as $itemId) {
            Stone::find($itemId)->update([
                'stone_type_id' => $id,
            ]);
        }
    }
}
