<?php

declare(strict_types=1);

namespace Domain\JewelleryProperties\ChainPropSize\Repositories;

use Domain\JewelleryProperties\ChainPropSize\Models\ChainPropSize;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

final class ChainPropSizeRepository
{
    public function index(array $data): Paginator
    {
        return QueryBuilder::for(ChainPropSize::class)
            ->allowedFields(\DB::getSchemaBuilder()->getColumnListing('chain_prop_sizes'))
            ->allowedIncludes(['chainProp','chainSize'])
            ->allowedFilters([
                AllowedFilter::exact('id'),
                'value'
            ])
            ->paginate($data['per_page'] ?? null)
            ->appends($data);
    }

    public function show(int $id, array $data): Model|ChainPropSize
    {
        return QueryBuilder::for(ChainPropSize::class)
            ->where('id', $id)
            ->allowedFields(\DB::getSchemaBuilder()->getColumnListing('chain_prop_sizes'))
            ->allowedIncludes(['chainSize','chainProp'])
            ->firstOrFail();
    }

    public function store(array $data): Model|ChainPropSize
    {
        return ChainPropSize::create(data_get($data, 'data.attributes'));
    }
}
