<?php

declare(strict_types=1);

namespace Domain\Inserts\InsertColour\Repositories;

use Domain\Inserts\InsertColour\Models\InsertColour;
use Domain\Shared\CRUDRepositoryInterface;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

final class InsertColourRepository implements InsertColourRepositoryInterface, CRUDRepositoryInterface
{
    public function index(array $data): Paginator
    {
        return QueryBuilder::for(InsertColour::class)
            ->allowedIncludes(['inserts','jewelleries'])
            ->allowedFilters([
                AllowedFilter::exact('id'),
                'is_active','name'
            ])
            ->paginate($data['per_page'] ?? null)
            ->appends($data);
    }

    public function store(array $data): InsertColour
    {
        return InsertColour::create($data);
    }

    public function show(array $data, int $id): InsertColour
    {
        return QueryBuilder::for(InsertColour::class)
            ->where('id', $id)
            ->allowedIncludes(['inserts','jewelleries'])
            ->firstOrFail();
    }

    public function update(array $data, int $id): void
    {
        InsertColour::find($id)->update($data);
    }

    public function destroy(int $id): void
    {
        InsertColour::findOrFail($id)->delete();
    }
}
