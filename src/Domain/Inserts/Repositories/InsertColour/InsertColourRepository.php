<?php

declare(strict_types=1);

namespace Domain\Inserts\Repositories\InsertColour;

use Domain\Inserts\Models\InsertColour;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

final class InsertColourRepository implements InsertColourRepositoryInterface
{

    public function index(array $data): Paginator
    {
        return QueryBuilder::for(InsertColour::class)
            ->allowedFields(\DB::getSchemaBuilder()->getColumnListing('insert_colours'))
            ->allowedIncludes(['inserts'])
            ->allowedFilters([
                AllowedFilter::exact('id'),
                'is_active','name'
            ])
            ->paginate($data['per_page'] ?? null)
            ->appends($data);
    }

    public function show(int $id, array $data): Model|InsertColour
    {
        return QueryBuilder::for(InsertColour::class)
            ->where('id', $id)
//            ->allowedFields(\DB::getSchemaBuilder()->getColumnListing('blog_posts'))
//            ->allowedIncludes(['blogCategory'])
            ->firstOrFail();
    }
}
