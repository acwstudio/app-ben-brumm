<?php

declare(strict_types=1);

namespace Domain\Inserts\StoneType\Repositories;

use Domain\Inserts\StoneType\Models\StoneType;
use Domain\Shared\CRUDRepositoryInterface;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

final class StoneTypeRepository implements StoneTypeRepositoryInterface, CRUDRepositoryInterface
{

    public function index(array $data): Paginator
    {
        return QueryBuilder::for(StoneType::class)
            ->allowedIncludes(['stones'])
            ->allowedFilters([
                AllowedFilter::exact('id'),
                'is_active','name'
            ])
            ->paginate($data['per_page'] ?? null)
            ->appends($data);
    }

    public function store(array $data): StoneType
    {
        return StoneType::create($data);
    }

    public function show(array $data, int $id): StoneType
    {
        return QueryBuilder::for(StoneType::class)
            ->where('id', $id)
            ->allowedIncludes(['stones'])
            ->firstOrFail();
    }

    public function update(array $data, int $id): void
    {
        StoneType::find($id)->update($data);
    }

    public function destroy(int $id): void
    {
        StoneType::findOrFail($id)->delete();
    }
}
