<?php

declare(strict_types=1);

namespace Domain\JewelleryProperties\RingSize\Repositories;

use Domain\JewelleryProperties\RingSize\Models\RingSize;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

final class RingSizeRepository
{
    public function index(array $data): Paginator
    {
        return QueryBuilder::for(RingSize::class)
            ->allowedFields(\DB::getSchemaBuilder()->getColumnListing('ring_sizes'))
            ->allowedIncludes(['ringPropSizes','ringProps'])
            ->allowedFilters([
                AllowedFilter::exact('id'),
                'value'
            ])
            ->paginate($data['per_page'] ?? null)
            ->appends($data);
    }

    public function show(int $id, array $data): Model|RingSize
    {
        return QueryBuilder::for(RingSize::class)
            ->where('id', $id)
            ->allowedFields(\DB::getSchemaBuilder()->getColumnListing('ring_sizes'))
            ->allowedIncludes(['ringPropSizes','ringProps'])
            ->firstOrFail();
    }

    public function store(array $data): Model|RingSize
    {
        return RingSize::create(data_get($data, 'data.attributes'));
    }
}
