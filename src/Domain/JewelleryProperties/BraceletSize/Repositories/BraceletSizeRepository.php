<?php

declare(strict_types=1);

namespace Domain\JewelleryProperties\BraceletSize\Repositories;

use Domain\JewelleryProperties\BraceletSize\Models\BraceletSize;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

final class BraceletSizeRepository
{
    public function index(array $data): Paginator
    {
        return QueryBuilder::for(BraceletSize::class)
            ->allowedFields(\DB::getSchemaBuilder()->getColumnListing('bracelet_sizes'))
            ->allowedIncludes(['braceletPropSizes','braceletProps'])
            ->allowedFilters([
                AllowedFilter::exact('id'),
                'value'
            ])
            ->paginate($data['per_page'] ?? null)
            ->appends($data);
    }

    public function show(int $id, array $data): Model|BraceletSize
    {
        return QueryBuilder::for(BraceletSize::class)
            ->where('id', $id)
            ->allowedFields(\DB::getSchemaBuilder()->getColumnListing('bracelet_sizes'))
            ->allowedIncludes(['braceletPropSizes','braceletProps'])
            ->firstOrFail();
    }

    public function store(array $data): Model|BraceletSize
    {
        return BraceletSize::create(data_get($data, 'data.attributes'));
    }
}
