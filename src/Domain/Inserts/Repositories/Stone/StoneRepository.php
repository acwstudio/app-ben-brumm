<?php

declare(strict_types=1);

namespace Domain\Inserts\Repositories\Stone;

use Domain\Inserts\Models\Stone;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

final class StoneRepository implements StoneRepositoryInterface
{
    public function index(array $data): Paginator
    {
        return QueryBuilder::for(Stone::class)
            ->allowedFields(\DB::getSchemaBuilder()->getColumnListing('stones'))
            ->allowedIncludes(['stoneType','inserts'])
            ->allowedFilters([
                AllowedFilter::exact('id'),
                'is_active','name','stone_type_id'
            ])
            ->paginate($data['per_page'] ?? null)
            ->appends($data);
    }

    public function show(int $id, array $data): Model|Stone
    {
        return QueryBuilder::for(Stone::class)
            ->where('id', $id)
//            ->allowedFields(\DB::getSchemaBuilder()->getColumnListing('blog_posts'))
//            ->allowedIncludes(['blogCategory'])
            ->firstOrFail();
    }
}
