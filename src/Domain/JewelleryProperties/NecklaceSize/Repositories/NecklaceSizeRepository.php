<?php

declare(strict_types=1);

namespace Domain\JewelleryProperties\NecklaceSize\Repositories;

use Domain\JewelleryProperties\NecklaceSize\Models\NecklaceSize;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

final class NecklaceSizeRepository
{
    public function index(array $data): Paginator
    {
        return QueryBuilder::for(NecklaceSize::class)
            ->allowedFields(\DB::getSchemaBuilder()->getColumnListing('necklace_sizes'))
            ->allowedIncludes(['necklacePropSizes','necklaceProps'])
            ->allowedFilters([
                AllowedFilter::exact('id'),
                'value'
            ])
            ->paginate($data['per_page'] ?? null)
            ->appends($data);
    }

    public function show(int $id, array $data): Model|NecklaceSize
    {
        return QueryBuilder::for(NecklaceSize::class)
            ->where('id', $id)
            ->allowedFields(\DB::getSchemaBuilder()->getColumnListing('necklace_sizes'))
            ->allowedIncludes(['necklacePropSizes','necklaceProps'])
            ->firstOrFail();
    }

    public function store(array $data): Model|NecklaceSize
    {
        return NecklaceSize::create(data_get($data, 'data.attributes'));
    }
}
