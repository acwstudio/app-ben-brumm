<?php

declare(strict_types=1);

namespace Domain\JewelleryProperties\Clasp\Repositories;

use Domain\JewelleryProperties\Clasp\Models\Clasp;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

final class ClaspRepository
{
    public function index(array $data): Paginator
    {
        return QueryBuilder::for(Clasp::class)
            ->allowedFields(\DB::getSchemaBuilder()->getColumnListing('clasps'))
            ->allowedIncludes(['earringProps'])
            ->allowedFilters([
                AllowedFilter::exact('id'),
                'name'
            ])
            ->paginate($data['per_page'] ?? null)
            ->appends($data);
    }

    public function show(int $id, array $data): Model|Clasp
    {
        return QueryBuilder::for(Clasp::class)
            ->where('id', $id)
            ->allowedFields(\DB::getSchemaBuilder()->getColumnListing('clasps'))
            ->allowedIncludes(['earringProps'])
            ->firstOrFail();
    }

    public function store(array $data): Model|Clasp
    {
        return Clasp::create(data_get($data, 'data.attributes'));
    }
}
