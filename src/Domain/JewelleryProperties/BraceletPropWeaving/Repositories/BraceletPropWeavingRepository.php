<?php

declare(strict_types=1);

namespace Domain\JewelleryProperties\BraceletPropWeaving\Repositories;

use Domain\JewelleryProperties\BraceletPropWeaving\Models\BraceletPropWeaving;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

final class BraceletPropWeavingRepository
{
    public function index(array $data): Paginator
    {
        return QueryBuilder::for(BraceletPropWeaving::class)
            ->allowedFields(\DB::getSchemaBuilder()->getColumnListing('bracelet_prop_weavings'))
            ->allowedIncludes(['braceletProp','weaving'])
            ->allowedFilters([
                AllowedFilter::exact('id'),
                'value'
            ])
            ->paginate($data['per_page'] ?? null)
            ->appends($data);
    }

    public function show(int $id, array $data): Model|BraceletPropWeaving
    {
        return QueryBuilder::for(BraceletPropWeaving::class)
            ->where('id', $id)
            ->allowedFields(\DB::getSchemaBuilder()->getColumnListing('bracelet_prop_weavings'))
            ->allowedIncludes(['braceletSize','weaving'])
            ->firstOrFail();
    }

    public function store(array $data): Model|BraceletPropWeaving
    {
        return BraceletPropWeaving::create(data_get($data, 'data.attributes'));
    }
}
