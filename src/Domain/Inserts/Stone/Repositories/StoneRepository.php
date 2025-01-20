<?php

declare(strict_types=1);

namespace Domain\Inserts\Stone\Repositories;

use Domain\Inserts\Stone\Models\Stone;
use Domain\Shared\CRUDRepositoryInterface;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

final class StoneRepository implements StoneRepositoryInterface, CRUDRepositoryInterface
{
    public function index(array $data): Paginator
    {
        return QueryBuilder::for(Stone::class)
            ->allowedIncludes(['stoneType','inserts'])
            ->allowedFilters([
                AllowedFilter::exact('id'),
                'is_active','name','stone_type_id'
            ])
            ->paginate($data['per_page'] ?? null)
            ->appends($data);
    }

    public function store(array $data): Stone
    {
        return Stone::create($data);
    }

    public function show(array $data, int $id): Model|Stone
    {
        return QueryBuilder::for(Stone::class)
            ->where('id', $id)
            ->allowedIncludes(['stoneType','inserts'])
            ->firstOrFail();
    }

    public function update(array $data, int $id): void
    {
        Stone::find($id)->update($data);
    }

    public function destroy(int $id): void
    {
        Stone::findOrFail($id)->delete();
    }
}
