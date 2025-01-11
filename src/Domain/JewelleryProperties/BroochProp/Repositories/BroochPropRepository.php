<?php

declare(strict_types=1);

namespace Domain\JewelleryProperties\BroochProp\Repositories;

use Domain\JewelleryProperties\BroochProp\Models\BroochProp;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

final class BroochPropRepository
{
    public function index(array $data): Paginator
    {
        return QueryBuilder::for(BroochProp::class)
            ->allowedFields(\DB::getSchemaBuilder()->getColumnListing('brooch_props'))
            ->allowedIncludes(['jewellery'])
            ->allowedFilters([
                AllowedFilter::exact('id'),
                AllowedFilter::exact('price'),
            ])
            ->paginate($data['per_page'] ?? null)
            ->appends($data);
    }

    public function show(int $id, array $data): Model|BroochProp
    {
        return QueryBuilder::for(BroochProp::class)
            ->where('id', $id)
            ->allowedFields(\DB::getSchemaBuilder()->getColumnListing('brooch_props'))
            ->allowedIncludes(['jewellery'])
            ->firstOrFail();
    }

    public function store(array $data): Model|BroochProp
    {
        return BroochProp::create(data_get($data, 'data.attributes'));
    }
}
