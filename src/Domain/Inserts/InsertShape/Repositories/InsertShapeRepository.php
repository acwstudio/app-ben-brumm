<?php

declare(strict_types=1);

namespace Domain\Inserts\InsertShape\Repositories;

use Domain\Inserts\InsertShape\Models\InsertShape;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

final class InsertShapeRepository implements InsertShapeRepositoryInterface
{
    public function index(array $data): Paginator
    {
        return QueryBuilder::for(InsertShape::class)
            ->allowedFields(\DB::getSchemaBuilder()->getColumnListing('insert_shapes'))
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
        // TODO: Implement store() method.
    }

    public function show(int $id, array $data): InsertShape
    {
        return QueryBuilder::for(InsertShape::class)
            ->where('id', $id)
//            ->allowedFields(\DB::getSchemaBuilder()->getColumnListing('blog_posts'))
//            ->allowedIncludes(['blogCategory'])
            ->firstOrFail();
    }

    public function update(array $data): void
    {
        // TODO: Implement update() method.
    }

    public function destroy(int $id): void
    {
        // TODO: Implement destroy() method.
    }
}
