<?php

declare(strict_types=1);

namespace Domain\JewelleryProperties\CufflinkProp\Repositories;

use Domain\JewelleryProperties\CufflinkProp\Models\CuffLinkProp;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

final class CuffLinkPropRepository
{
    public function index(array $data): Paginator
    {
        return QueryBuilder::for(CuffLinkProp::class)
            ->allowedFields(\DB::getSchemaBuilder()->getColumnListing('cuff_link_props'))
            ->allowedIncludes(['jewellery'])
            ->allowedFilters([
                AllowedFilter::exact('id'),
                AllowedFilter::exact('price'),
            ])
            ->paginate($data['per_page'] ?? null)
            ->appends($data);
    }

    public function show(int $id, array $data): Model|CuffLinkProp
    {
        return QueryBuilder::for(CuffLinkProp::class)
            ->where('id', $id)
            ->allowedFields(\DB::getSchemaBuilder()->getColumnListing('cuff_link_props'))
            ->allowedIncludes(['jewellery'])
            ->firstOrFail();
    }

    public function store(array $data): Model|CuffLinkProp
    {
        return CuffLinkProp::create(data_get($data, 'data.attributes'));
    }
}
