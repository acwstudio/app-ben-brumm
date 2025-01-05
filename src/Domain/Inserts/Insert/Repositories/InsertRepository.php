<?php

declare(strict_types=1);

namespace Domain\Inserts\Insert\Repositories;

use Domain\Inserts\Insert\Models\Insert;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

final class InsertRepository implements InsertRepositoryInterface
{

    public function index(array $data): Paginator
    {
        return QueryBuilder::for(Insert::class)
            ->allowedFields(\DB::getSchemaBuilder()->getColumnListing('inserts'))
            ->allowedIncludes(['stone','jewellery','insertShape','insertColour','insertProperty'])
            ->allowedFilters([
                AllowedFilter::exact('id'),
                AllowedFilter::exact('jewellery_id'),
                AllowedFilter::exact('stone_id'),
                AllowedFilter::exact('insert_shape_id'),
                AllowedFilter::exact('insert_colour_id'),
                AllowedFilter::exact('insert_property_id'),
            ])
            ->paginate($data['per_page'] ?? null)
            ->appends($data);
    }

    public function show(int $id, array $data): Model|Insert
    {
        return QueryBuilder::for(Insert::class)
            ->where('id', $id)
//            ->allowedFields(\DB::getSchemaBuilder()->getColumnListing('blog_posts'))
//            ->allowedIncludes(['blogCategory'])
            ->firstOrFail();
    }
}
