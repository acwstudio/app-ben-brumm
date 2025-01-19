<?php

declare(strict_types=1);

namespace Domain\Inserts\Insert\Repositories;

use Domain\Inserts\Insert\Models\Insert;
use Domain\Shared\CRUDRepositoryInterface;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

final class InsertRepository implements InsertRepositoryInterface, CRUDRepositoryInterface
{

    public function index(array $data): Paginator
    {
        return QueryBuilder::for(Insert::class)
            ->allowedIncludes(['stone','jewellery','insertShape','insertColour','insertProperty'])
            ->allowedFilters([
                AllowedFilter::exact('id'),
                AllowedFilter::exact('jewellery_id'),
                AllowedFilter::exact('stone_id'),
                AllowedFilter::exact('insert_shape_id'),
                AllowedFilter::exact('insert_colour_id'),
                AllowedFilter::exact('insert_property_id'),
            ])
            ->paginate($data['per_page'] ?? null)
            ->appends($data);
    }

    public function store(array $data): Insert
    {
        return Insert::create($data);
    }

    public function show(int $id, array $data): Insert
    {
        return QueryBuilder::for(Insert::class)
            ->where('id', $id)
            ->allowedIncludes(['stone','jewellery','insertShape','insertColour','insertProperty'])
            ->firstOrFail();
    }

    public function update(array $data, int $id): void
    {
        Insert::find($id)->update($data);
    }

    public function destroy(int $id): void
    {
        Insert::findOrFail($id)->delete();
    }
}
