<?php

declare(strict_types=1);

namespace Domain\Inserts\InsertProperty\Repositories;

use Domain\Inserts\InsertProperty\Models\InsertProperty;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

/** @mixin InsertProperty */
final class InsertPropertyRepository
{
    public function index(array $data): Paginator
    {
        return QueryBuilder::for(InsertProperty::class)
            ->allowedFields(\DB::getSchemaBuilder()->getColumnListing('insert_properties'))
            ->allowedIncludes(['insert'])
            ->allowedFilters([
                AllowedFilter::exact('id'),
                AllowedFilter::exact('quantity'),
            ])
            ->paginate($data['per_page'] ?? null)
            ->appends($data);
    }

    public function show(int $id, array $data): Model|InsertProperty
    {
        return QueryBuilder::for(InsertProperty::class)
            ->where('id', $id)
//            ->allowedFields(\DB::getSchemaBuilder()->getColumnListing('blog_posts'))
//            ->allowedIncludes(['blogCategory'])
            ->firstOrFail();
    }
}
