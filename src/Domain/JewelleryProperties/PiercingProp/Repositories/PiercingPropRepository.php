<?php

declare(strict_types=1);

namespace Domain\JewelleryProperties\PiercingProp\Repositories;

use Domain\JewelleryProperties\PiercingProp\Models\PiercingProp;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

final class PiercingPropRepository
{
    public function index(array $data): Paginator
    {
        return QueryBuilder::for(PiercingProp::class)
            ->allowedFields(\DB::getSchemaBuilder()->getColumnListing('piercing_props'))
            ->allowedIncludes(['jewellery'])
            ->allowedFilters([
                AllowedFilter::exact('id'),
                AllowedFilter::exact('price'),
            ])
            ->paginate($data['per_page'] ?? null)
            ->appends($data);
    }

    public function show(int $id, array $data): Model|PiercingProp
    {
        return QueryBuilder::for(PiercingProp::class)
            ->where('id', $id)
            ->allowedFields(\DB::getSchemaBuilder()->getColumnListing('piercing_props'))
            ->allowedIncludes(['jewellery'])
            ->firstOrFail();
    }

    public function store(array $data): Model|PiercingProp
    {
        return PiercingProp::create(data_get($data, 'data.attributes'));
    }
}
