<?php

declare(strict_types=1);

namespace Domain\Inserts\InsertColour\Repositories\RelationRepositories;

use Domain\Inserts\InsertColour\Models\InsertColour;
use Domain\Shared\AbstractRelationsRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

final class InsertColoursJewelleriesRelationsRepository extends AbstractRelationsRepository
{

    public function index(int $id): Model|Collection
    {
        return InsertColour::find($id)->jewelleries;
    }

    public function update(array $data, int $id): void
    {
        // TODO: Implement update() method.
    }
}
