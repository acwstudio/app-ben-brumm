<?php

declare(strict_types=1);

namespace Domain\Inserts\Insert\Repositories\RelationRepositories;

use Domain\Inserts\Insert\Models\Insert;
use Domain\Inserts\Stone\Models\Stone;
use Domain\Shared\AbstractRelationsRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

final class InsertsStoneRepository extends AbstractRelationsRepository
{
    public function index(int $id): Model|Collection|Stone
    {
        return Insert::find($id)->stone;
    }

    public function update(array $data, int $id): void
    {
        Insert::find($id)->update([
            'stone_id' => data_get($data, 'data.id'),
        ]);
    }
}
