<?php

declare(strict_types=1);

namespace Domain\Inserts\InsertProperty\Repositories;

use Domain\Inserts\InsertProperty\Models\InsertProperty;
use Domain\Shared\CRUDRepositoryInterface;
use Illuminate\Contracts\Pagination\Paginator;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

/** @mixin InsertProperty */
final class InsertPropertyRepository implements InsertPropertyRepositoryInterface, CRUDRepositoryInterface
{
    public function index(array $data): Paginator
    {
        return QueryBuilder::for(InsertProperty::class)
            ->allowedIncludes(['insert'])
            ->allowedFilters([
                AllowedFilter::exact('id'),
                AllowedFilter::exact('quantity'),
            ])
            ->paginate($data['per_page'] ?? null)
            ->appends($data);
    }

    public function store(array $data): InsertProperty
    {
        return InsertProperty::create(data_get($data, 'data.attributes'));
    }

    public function show(array $data, int $id): InsertProperty
    {
        return QueryBuilder::for(InsertProperty::class)
            ->where('id', $id)
            ->allowedIncludes(['insert'])
            ->firstOrFail();
    }

    public function update(array $data, int $id): void
    {
        InsertProperty::find($id)->update($data);
    }

    public function destroy(int $id): void
    {
        InsertProperty::findOrFail($id)->delete();
    }
}
