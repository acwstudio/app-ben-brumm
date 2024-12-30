<?php

declare(strict_types=1);

namespace Domain\Jewelleries\Repositories\Jewellery;

use Domain\Jewelleries\Models\Jewellery;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

final class JewelleryRepository implements JewelleryRepositoryInterface
{
    public function index(array $data): Paginator
    {
        return QueryBuilder::for(Jewellery::class)
            ->allowedFields(\DB::getSchemaBuilder()->getColumnListing('jewelleries'))
            ->allowedIncludes(['jewelleryCategory','braceletPropView'])
            ->allowedFilters([
                AllowedFilter::exact('slug'),
                AllowedFilter::exact('id'),
                'is_active','name','part_number'
            ])
            ->paginate($data['per_page'] ?? null)
            ->appends($data);
    }

    public function show(int $id, array $data): Model|Jewellery
    {
        return QueryBuilder::for(Jewellery::class)
            ->where('id', $id)
//            ->allowedFields(\DB::getSchemaBuilder()->getColumnListing('blog_posts'))
//            ->allowedIncludes(['blogCategory'])
            ->firstOrFail();
    }
}
