<?php

declare(strict_types=1);

namespace Domain\Jewelleries\Repositories;

use Domain\Jewelleries\Models\Jewellery;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;
use Spatie\QueryBuilder\QueryBuilder;

final class JewelleryRepository implements JewelleryRepositoryInterface
{

    public function index(array $data): Paginator
    {
        return QueryBuilder::for(Jewellery::class)

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
