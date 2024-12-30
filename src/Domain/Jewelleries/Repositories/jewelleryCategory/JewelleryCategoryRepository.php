<?php

declare(strict_types=1);

namespace Domain\Jewelleries\Repositories\jewelleryCategory;

use Domain\Jewelleries\Models\JewelleryCategory;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

final class JewelleryCategoryRepository implements JewelleryCategoryRepositoryInterface
{
    public function index(array $data): Paginator
    {
        return QueryBuilder::for(JewelleryCategory::class)
            ->allowedFields(\DB::getSchemaBuilder()->getColumnListing('jewellery_categories'))
            ->allowedIncludes(['jewelleries'])
            ->allowedFilters([
                AllowedFilter::exact('category_code'),
                AllowedFilter::exact('id'),
                'name','slug'
            ])
            ->paginate($data['per_page'] ?? null)
            ->appends($data);
    }

    public function show(int $id, array $data): Model|JewelleryCategory
    {
        return QueryBuilder::for(JewelleryCategory::class)
            ->where('id', $id)
//            ->allowedFields(\DB::getSchemaBuilder()->getColumnListing('blog_posts'))
//            ->allowedIncludes(['blogCategory'])
            ->firstOrFail();
    }
}
