<?php

declare(strict_types=1);

namespace Domain\Inserts\Stone\Repositories\RelationRepositories;

use Domain\Inserts\Insert\Models\Insert;
use Domain\Inserts\Stone\Models\Stone;
use Domain\Shared\AbstractRelationsRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

final class StoneInsertsRelationsRepository extends AbstractRelationsRepository
{
    public function index(int $id): Model|Collection
    {
        return Stone::find($id)->inserts;
    }

    public function update(array $data, int $id): void
    {
        $ids = data_get($data, 'data.*.id');

        foreach ($ids as $itemId) {
            Insert::find($itemId)->update([
                'stone_id' => $id,
            ]);
        }
    }
}
