<?php

declare(strict_types=1);

namespace Domain\Inserts\Repositories\InsertProperty;

use Domain\AbstractCachedRepository;
use Domain\Inserts\Models\InsertShape;
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

    public function show(int $id, array $data): Model|InsertShape
    {
        return QueryBuilder::for(InsertShape::class)
            ->where('id', $id)
//            ->allowedFields(\DB::getSchemaBuilder()->getColumnListing('blog_posts'))
//            ->allowedIncludes(['blogCategory'])
            ->firstOrFail();
    }
}
