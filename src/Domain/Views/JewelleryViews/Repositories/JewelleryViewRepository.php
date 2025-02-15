<?php

declare(strict_types=1);

namespace Domain\Views\JewelleryViews\Repositories;

use Domain\Views\JewelleryViews\Models\JewelleryView;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

final class JewelleryViewRepository implements JewelleryViewRepositoryInterface
{

    public function index(array $data): Paginator
    {
        return QueryBuilder::for(JewelleryView::class)
            ->allowedIncludes(['prcsMetalSample','prcsMetalColour','prcsMetal','prcsMetalCoverages'])
            ->allowedFilters([
                AllowedFilter::exact('id'),
                AllowedFilter::exact('part_number'),
                AllowedFilter::exact('prcs_metal_colour_id'),
                AllowedFilter::exact('prcs_metal_sample_id'),
                AllowedFilter::exact('prcs_metal_id'),
                'is_active','jewellery'
            ])
            ->allowedSorts(['id', 'jewellery'])
            ->paginate($data['per_page'] ?? null)
            ->appends($data);
    }

    public function show(int $id, array $data): Model|JewelleryView
    {
        return QueryBuilder::for(JewelleryView::class)
            ->where('id', $id)
            ->allowedIncludes(['prcsMetalSample','prcsMetalColour','prcsMetal','prcsMetalCoverages'])
            ->firstOrFail();
    }
}
