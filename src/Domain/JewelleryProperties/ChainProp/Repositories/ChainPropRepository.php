<?php

declare(strict_types=1);

namespace Domain\JewelleryProperties\ChainProp\Repositories;

use Domain\JewelleryProperties\ChainProp\Models\ChainProp;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

final class ChainPropRepository
{
    public function index(array $data): Paginator
    {
        return QueryBuilder::for(ChainProp::class)
            ->allowedFields(\DB::getSchemaBuilder()->getColumnListing('chain_props'))
            ->allowedIncludes(['chainPropSizes','chainPropWeavings','chainSizes','weavings','jewellery'])
            ->allowedFilters([
                AllowedFilter::exact('id'),
                AllowedFilter::exact('jewellery_id'),
            ])
            ->paginate($data['per_page'] ?? null)
            ->appends($data);
    }

    public function show(int $id, array $data): Model|ChainProp
    {
        return QueryBuilder::for(ChainProp::class)
            ->where('id', $id)
            ->allowedFields(\DB::getSchemaBuilder()->getColumnListing('chain_props'))
            ->allowedIncludes(['chainPropSizes','chainPropWeavings','chainSizes','weavings','jewellery'])
            ->firstOrFail();
    }

    public function store(array $data): Model|ChainProp
    {
        return ChainProp::create(data_get($data, 'data.attributes'));
    }
}
