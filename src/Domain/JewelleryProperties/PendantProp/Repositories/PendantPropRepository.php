<?php

declare(strict_types=1);

namespace Domain\JewelleryProperties\PendantProp\Repositories;

use Domain\JewelleryProperties\PendantProp\Models\PendantProp;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

final class PendantPropRepository
{
    public function index(array $data): Paginator
    {
        return QueryBuilder::for(PendantProp::class)
            ->allowedFields(\DB::getSchemaBuilder()->getColumnListing('pendant_props'))
            ->allowedIncludes(['jewellery'])
            ->allowedFilters([
                AllowedFilter::exact('id'),
                AllowedFilter::exact('price'),
            ])
            ->paginate($data['per_page'] ?? null)
            ->appends($data);
    }

    public function show(int $id, array $data): Model|PendantProp
    {
        return QueryBuilder::for(PendantProp::class)
            ->where('id', $id)
            ->allowedFields(\DB::getSchemaBuilder()->getColumnListing('pendant_props'))
            ->allowedIncludes(['jewellery'])
            ->firstOrFail();
    }

    public function store(array $data): Model|PendantProp
    {
        return PendantProp::create(data_get($data, 'data.attributes'));
    }
}
