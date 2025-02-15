<?php

declare(strict_types=1);

namespace Domain\Views\InsertViews\Repositories;

use Domain\Views\InsertViews\Models\InsertView;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

final class InsertViewRepository
{
    public function index(array $data): Paginator
    {
        return QueryBuilder::for(InsertView::class)
            ->allowedIncludes(['jewelleryView'])
            ->allowedFilters([
                AllowedFilter::exact('id'),
                AllowedFilter::exact('gem'),
                AllowedFilter::exact('is_natural'),
                AllowedFilter::exact('colour'),
                AllowedFilter::exact('shape'),
            ])
            ->allowedSorts(['id', 'weight'])
            ->paginate($data['per_page'] ?? null)
            ->appends($data);
    }

    public function show(int $id, array $data): Model|InsertView
    {
        return QueryBuilder::for(InsertView::class)
            ->where('id', $id)
            ->allowedIncludes(['jewelleryView'])
            ->firstOrFail();
    }
}
