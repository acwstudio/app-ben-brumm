<?php

declare(strict_types=1);

namespace Domain\JewelleryProperties\BraceletPropSize\Repositories;

use Domain\JewelleryProperties\BraceletPropSize\Models\BraceletPropSize;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

final class BraceletPropSizeRepository
{
    public function index(array $data): Paginator
    {
        return QueryBuilder::for(BraceletPropSize::class)
            ->allowedFields(\DB::getSchemaBuilder()->getColumnListing('bracelet_prop_sizes'))
            ->allowedIncludes(['braceletProp','braceletSize'])
            ->allowedFilters([
                AllowedFilter::exact('id'),
                'value'
            ])
            ->paginate($data['per_page'] ?? null)
            ->appends($data);
    }

    public function show(int $id, array $data): Model|BraceletPropSize
    {
        return QueryBuilder::for(BraceletPropSize::class)
            ->where('id', $id)
            ->allowedFields(\DB::getSchemaBuilder()->getColumnListing('bracelet_prop_sizes'))
            ->allowedIncludes(['braceletSize','braceletProp'])
            ->firstOrFail();
    }

    public function store(array $data): Model|BraceletPropSize
    {
        return BraceletPropSize::create(data_get($data, 'data.attributes'));
    }
}
