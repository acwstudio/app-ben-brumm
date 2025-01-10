<?php

declare(strict_types=1);

namespace Domain\JewelleryProperties\ChainPropWeaving\Repositories;

use Domain\JewelleryProperties\ChainPropWeaving\Models\ChainPropWeaving;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

final class ChainPropWeavingRepository
{
    public function index(array $data): Paginator
    {
        return QueryBuilder::for(ChainPropWeaving::class)
            ->allowedFields(\DB::getSchemaBuilder()->getColumnListing('chain_prop_weavings'))
            ->allowedIncludes(['chainProp','weaving'])
            ->allowedFilters([
                AllowedFilter::exact('id'),
                'value'
            ])
            ->paginate($data['per_page'] ?? null)
            ->appends($data);
    }

    public function show(int $id, array $data): Model|ChainPropWeaving
    {
        return QueryBuilder::for(ChainPropWeaving::class)
            ->where('id', $id)
            ->allowedFields(\DB::getSchemaBuilder()->getColumnListing('chain_prop_weavings'))
            ->allowedIncludes(['weaving','chainProp'])
            ->firstOrFail();
    }

    public function store(array $data): Model|ChainPropWeaving
    {
        return ChainPropWeaving::create(data_get($data, 'data.attributes'));
    }
}
