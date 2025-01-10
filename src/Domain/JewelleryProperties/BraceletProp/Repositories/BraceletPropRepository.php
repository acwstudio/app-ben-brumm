<?php

declare(strict_types=1);

namespace Domain\JewelleryProperties\BraceletProp\Repositories;

use Domain\JewelleryProperties\BraceletProp\Models\BraceletProp;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

final class BraceletPropRepository
{
    public function index(array $data): Paginator
    {
        return QueryBuilder::for(BraceletProp::class)
            ->allowedFields(\DB::getSchemaBuilder()->getColumnListing('bracelet_props'))
            ->allowedIncludes(['braceletPropSizes','braceletPropWeavings','braceletSizes','weavings','jewellery'])
            ->allowedFilters([
                AllowedFilter::exact('id'),
                'value'
            ])
            ->paginate($data['per_page'] ?? null)
            ->appends($data);
    }

    public function show(int $id, array $data): Model|BraceletProp
    {
        return QueryBuilder::for(BraceletProp::class)
            ->where('id', $id)
            ->allowedFields(\DB::getSchemaBuilder()->getColumnListing('bracelet_props'))
            ->allowedIncludes(['braceletPropSizes','braceletPropWeavings','braceletSizes','weavings','jewellery'])
            ->firstOrFail();
    }

    public function store(array $data): Model|BraceletProp
    {
        return BraceletProp::create(data_get($data, 'data.attributes'));
    }
}
