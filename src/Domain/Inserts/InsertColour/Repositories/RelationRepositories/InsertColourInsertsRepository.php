<?php

declare(strict_types=1);

namespace Domain\Inserts\InsertColour\Repositories\RelationRepositories;

use Domain\Inserts\Insert\Models\Insert;
use Domain\Inserts\InsertColour\Models\InsertColour;
use Domain\Shared\AbstractRelationsRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

final class InsertColourInsertsRepository extends AbstractRelationsRepository
{
    public function index(int $id): Model|Collection
    {
        return InsertColour::find($id)->inserts;
    }

    public function update(array $data, int $id): void
    {
        $ids = data_get($data, 'data.*.id');

        foreach ($ids as $itemId) {
            Insert::find($itemId)->update([
                'insert_colour_id' => $id,
            ]);
        }
    }
}
