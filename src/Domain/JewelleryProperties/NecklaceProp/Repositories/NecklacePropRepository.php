<?php

declare(strict_types=1);

namespace Domain\JewelleryProperties\NecklaceProp\Repositories;

use Domain\JewelleryProperties\NecklaceProp\Models\NecklaceProp;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

final class NecklacePropRepository
{
    public function index(array $data): Paginator
    {
        return QueryBuilder::for(NecklaceProp::class)
            ->allowedFields(\DB::getSchemaBuilder()->getColumnListing('necklace_props'))
            ->allowedIncludes(['jewellery','necklacePropSizes','necklaceSizes'])
            ->allowedFilters([
                AllowedFilter::exact('id'),
                'value'
            ])
            ->paginate($data['per_page'] ?? null)
            ->appends($data);
    }

    public function show(int $id, array $data): Model|NecklaceProp
    {
        return QueryBuilder::for(NecklaceProp::class)
            ->where('id', $id)
            ->allowedFields(\DB::getSchemaBuilder()->getColumnListing('necklace_props'))
            ->allowedIncludes(['jewellery','necklacePropSizes','necklaceSizes'])
            ->firstOrFail();
    }

    public function store(array $data): Model|NecklaceProp
    {
        return NecklaceProp::create(data_get($data, 'data.attributes'));
    }
}
