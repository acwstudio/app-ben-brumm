<?php

declare(strict_types=1);

namespace Domain\JewelleryProperties\NecklacePropSize\Repositories;

use Domain\JewelleryProperties\NecklacePropSize\Models\NecklacePropSize;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

final class NecklacePropSizeRepository
{
    public function index(array $data): Paginator
    {
        return QueryBuilder::for(NecklacePropSize::class)
            ->allowedFields(\DB::getSchemaBuilder()->getColumnListing('necklace_prop_sizes'))
            ->allowedIncludes(['necklaceProp','necklaceSize'])
            ->allowedFilters([
                AllowedFilter::exact('id'),
                'value'
            ])
            ->paginate($data['per_page'] ?? null)
            ->appends($data);
    }

    public function show(int $id, array $data): Model|NecklacePropSize
    {
        return QueryBuilder::for(NecklacePropSize::class)
            ->where('id', $id)
            ->allowedFields(\DB::getSchemaBuilder()->getColumnListing('necklace_prop_sizes'))
            ->allowedIncludes(['necklaceSize','necklaceProp'])
            ->firstOrFail();
    }

    public function store(array $data): Model|NecklacePropSize
    {
        return NecklacePropSize::create(data_get($data, 'data.attributes'));
    }
}
