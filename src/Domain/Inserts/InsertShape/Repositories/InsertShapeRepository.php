<?php

declare(strict_types=1);

namespace Domain\Inserts\InsertShape\Repositories;

use Domain\Inserts\InsertShape\Models\InsertShape;
use Domain\Shared\CRUDRepositoryInterface;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

final class InsertShapeRepository implements InsertShapeRepositoryInterface, CRUDRepositoryInterface
{
    public function index(array $data): Paginator
    {
        return QueryBuilder::for(InsertShape::class)
            ->allowedIncludes(['inserts'])
            ->allowedFilters([
                AllowedFilter::exact('id'),
                'is_active','name'
            ])
            ->paginate($data['per_page'] ?? null)
            ->appends($data);
    }

    public function store(array $data): InsertShape
    {
        return InsertShape::create($data);
    }

    public function show(array $data, int $id): InsertShape
    {
        return QueryBuilder::for(InsertShape::class)
            ->where('id', $id)
            ->allowedIncludes(['inserts'])
            ->firstOrFail();
    }

    public function update(array $data, int $id): void
    {
        InsertShape::find($id)->update($data);
    }

    public function destroy(int $id): void
    {
        InsertShape::findOrFail($id)->delete();
    }
}
