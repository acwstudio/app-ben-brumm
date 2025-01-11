<?php

declare(strict_types=1);

namespace Domain\JewelleryProperties\CharmPendantProp\Repositories;

use Domain\JewelleryProperties\CharmPendantProp\Models\CharmPendantProp;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

final class CharmPendantPropRepository
{
    public function index(array $data): Paginator
    {
        return QueryBuilder::for(CharmPendantProp::class)
            ->allowedFields(\DB::getSchemaBuilder()->getColumnListing('charm_pendant_props'))
            ->allowedIncludes(['jewellery'])
            ->allowedFilters([
                AllowedFilter::exact('id'),
                AllowedFilter::exact('price'),
            ])
            ->paginate($data['per_page'] ?? null)
            ->appends($data);
    }

    public function show(int $id, array $data): Model|CharmPendantProp
    {
        return QueryBuilder::for(CharmPendantProp::class)
            ->where('id', $id)
            ->allowedFields(\DB::getSchemaBuilder()->getColumnListing('charm_pendant_props'))
            ->allowedIncludes(['jewellery'])
            ->firstOrFail();
    }

    public function store(array $data): Model|CharmPendantProp
    {
        return CharmPendantProp::create(data_get($data, 'data.attributes'));
    }
}
