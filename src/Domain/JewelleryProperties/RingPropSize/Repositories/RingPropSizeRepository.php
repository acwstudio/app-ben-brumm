<?php

declare(strict_types=1);

namespace Domain\JewelleryProperties\RingPropSize\Repositories;

use Domain\JewelleryProperties\RingPropSize\Models\RingPropSize;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

final class RingPropSizeRepository
{
    public function index(array $data): Paginator
    {
        return QueryBuilder::for(RingPropSize::class)
            ->allowedFields(\DB::getSchemaBuilder()->getColumnListing('ring_prop_sizes'))
            ->allowedIncludes(['ringSize','ringProp'])
            ->allowedFilters([
                AllowedFilter::exact('id'),
                'value'
            ])
            ->paginate($data['per_page'] ?? null)
            ->appends($data);
    }

    public function show(int $id, array $data): Model|RingPropSize
    {
        return QueryBuilder::for(RingPropSize::class)
            ->where('id', $id)
            ->allowedFields(\DB::getSchemaBuilder()->getColumnListing('ring_prop_sizes'))
            ->allowedIncludes(['ringSize','ringProp'])
            ->firstOrFail();
    }

    public function store(array $data): Model|RingPropSize
    {
        return RingPropSize::create(data_get($data, 'data.attributes'));
    }
}
