<?php

declare(strict_types=1);

namespace Domain\Inserts\Insert\Repositories\RelationRepositories;

use Domain\Inserts\Insert\Models\Insert;
use Domain\Jewelleries\Jewellery\Models\Jewellery;
use Domain\Shared\AbstractRelationsRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

final class InsertsJewelleryRepository extends AbstractRelationsRepository
{
    public function index(int $id): Model|Collection|Jewellery
    {
        return Insert::find($id)->jewellery;
    }

    public function update(array $data, int $id): void
    {
        Insert::find($id)->update([
            'jewellery_id' => data_get($data, 'data.id'),
        ]);
    }
}
