<?php

declare(strict_types=1);

namespace Domain\JewelleryProperties\RingProp\Repositories;

use Domain\JewelleryProperties\RingProp\Models\RingProp;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

final class RingPropRepository
{
    public function index(array $data): Paginator
    {
        return QueryBuilder::for(RingProp::class)
            ->allowedFields(\DB::getSchemaBuilder()->getColumnListing('ring_props'))
            ->allowedIncludes(['jewellery','ringPropSizes','ringSizes'])
            ->allowedFilters([
                AllowedFilter::exact('id'),
                'value'
            ])
            ->paginate($data['per_page'] ?? null)
            ->appends($data);
    }

    public function show(int $id, array $data): Model|RingProp
    {
        return QueryBuilder::for(RingProp::class)
            ->where('id', $id)
            ->allowedFields(\DB::getSchemaBuilder()->getColumnListing('ring_props'))
            ->allowedIncludes(['jewellery','ringPropSizes','ringSizes'])
            ->firstOrFail();
    }

    public function store(array $data): Model|RingProp
    {
        return RingProp::create(data_get($data, 'data.attributes'));
    }
}
