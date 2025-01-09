<?php

declare(strict_types=1);

namespace Domain\JewelleryProperties\Weaving\Repositories;

use Domain\JewelleryProperties\Weaving\Models\Weaving;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

final class WeavingRepository
{
    public function index(array $data): Paginator
    {
        return QueryBuilder::for(Weaving::class)
            ->allowedFields(\DB::getSchemaBuilder()->getColumnListing('weavings'))
            ->allowedIncludes(['braceletPropWeavings','chainPropWeavings','braceletProps','chainProps'])
            ->allowedFilters([
                AllowedFilter::exact('id'),
                'name'
            ])
            ->paginate($data['per_page'] ?? null)
            ->appends($data);
    }

    public function show(int $id, array $data): Model|Weaving
    {
        return QueryBuilder::for(Weaving::class)
            ->where('id', $id)
            ->allowedFields(\DB::getSchemaBuilder()->getColumnListing('weavings'))
            ->allowedIncludes(['braceletPropWeavings','chainPropWeavings','braceletProps','chainProps'])
            ->firstOrFail();
    }

    public function store(array $data): Model|Weaving
    {
        return Weaving::create(data_get($data, 'data.attributes'));
    }
}
