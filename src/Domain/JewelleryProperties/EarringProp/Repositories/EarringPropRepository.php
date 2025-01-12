<?php

declare(strict_types=1);

namespace Domain\JewelleryProperties\EarringProp\Repositories;

use Domain\JewelleryProperties\EarringProp\Models\EarringProp;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

final class EarringPropRepository
{
    public function index(array $data): Paginator
    {
        return QueryBuilder::for(EarringProp::class)
            ->allowedFields(\DB::getSchemaBuilder()->getColumnListing('earring_props'))
            ->allowedIncludes(['jewellery','clasp'])
            ->allowedFilters([
                AllowedFilter::exact('id'),
                AllowedFilter::exact('price'),
            ])
            ->paginate($data['per_page'] ?? null)
            ->appends($data);
    }

    public function show(int $id, array $data): Model|EarringProp
    {
        return QueryBuilder::for(EarringProp::class)
            ->where('id', $id)
            ->allowedFields(\DB::getSchemaBuilder()->getColumnListing('earring_props'))
            ->allowedIncludes(['jewellery','clasp'])
            ->firstOrFail();
    }

    public function store(array $data): Model|EarringProp
    {
        return EarringProp::create(data_get($data, 'data.attributes'));
    }
}
