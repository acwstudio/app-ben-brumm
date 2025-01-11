<?php

declare(strict_types=1);

namespace Domain\JewelleryProperties\TieClipProp\Repositories;

use Domain\JewelleryProperties\TieClipProp\Models\TieClipProp;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

final class TieClipPropRepository
{
    public function index(array $data): Paginator
    {
        return QueryBuilder::for(TieClipProp::class)
            ->allowedFields(\DB::getSchemaBuilder()->getColumnListing('tie_clip_props'))
            ->allowedIncludes(['jewellery'])
            ->allowedFilters([
                AllowedFilter::exact('id'),
                AllowedFilter::exact('price'),
            ])
            ->paginate($data['per_page'] ?? null)
            ->appends($data);
    }

    public function show(int $id, array $data): Model|TieClipProp
    {
        return QueryBuilder::for(TieClipProp::class)
            ->where('id', $id)
            ->allowedFields(\DB::getSchemaBuilder()->getColumnListing('tie_clip_props'))
            ->allowedIncludes(['jewellery'])
            ->firstOrFail();
    }

    public function store(array $data): Model|TieClipProp
    {
        return TieClipProp::create(data_get($data, 'data.attributes'));
    }
}
