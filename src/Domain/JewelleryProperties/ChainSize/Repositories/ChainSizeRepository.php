<?php

declare(strict_types=1);

namespace Domain\JewelleryProperties\ChainSize\Repositories;

use Domain\JewelleryProperties\ChainSize\Models\ChainSize;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

final class ChainSizeRepository
{
    public function index(array $data): Paginator
    {
        return QueryBuilder::for(ChainSize::class)
            ->allowedFields(\DB::getSchemaBuilder()->getColumnListing('chain_sizes'))
            ->allowedIncludes(['chainPropSizes','chainProps'])
            ->allowedFilters([
                AllowedFilter::exact('id'),
                'value'
            ])
            ->paginate($data['per_page'] ?? null)
            ->appends($data);
    }

    public function show(int $id, array $data): Model|ChainSize
    {
        return QueryBuilder::for(ChainSize::class)
            ->where('id', $id)
            ->allowedFields(\DB::getSchemaBuilder()->getColumnListing('chain_sizes'))
            ->allowedIncludes(['chainPropSizes','chainProps'])
            ->firstOrFail();
    }

    public function store(array $data): Model|ChainSize
    {
        return ChainSize::create(data_get($data, 'data.attributes'));
    }
}
