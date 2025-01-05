<?php

declare(strict_types=1);

namespace Domain\Inserts\StoneType\Repositories;

use Domain\Inserts\StoneType\Models\StoneType;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

final class StoneTypeRepository implements StoneTypeRepositoryInterface
{

    public function index(array $data): Paginator
    {
        return QueryBuilder::for(StoneType::class)
            ->allowedFields(\DB::getSchemaBuilder()->getColumnListing('stone_types'))
            ->allowedIncludes(['stones'])
            ->allowedFilters([
                AllowedFilter::exact('id'),
                'is_active','name'
            ])
            ->paginate($data['per_page'] ?? null)
            ->appends($data);
    }

    public function show(int $id, array $data): Model|StoneType
    {
        return QueryBuilder::for(StoneType::class)
            ->where('id', $id)
//            ->allowedFields(\DB::getSchemaBuilder()->getColumnListing('blog_posts'))
//            ->allowedIncludes(['blogCategory'])
            ->firstOrFail();
    }
}
