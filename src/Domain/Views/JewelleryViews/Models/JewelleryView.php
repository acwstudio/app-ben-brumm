<?php

declare(strict_types=1);

namespace Domain\Views\JewelleryViews\Models;

use Domain\Discounts\Discount\Models\Discount;
use Domain\Jewelleries\JewelleryCategory\Models\JewelleryCategory;
use Domain\PreciousMetals\PrcsMetal\Models\PrcsMetal;
use Domain\PreciousMetals\PrcsMetalColour\Models\PrcsMetalColour;
use Domain\PreciousMetals\PrcsMetalCoverage\Models\PrcsMetalCoverage;
use Domain\PreciousMetals\PrcsMetalSample\Models\PrcsMetalSample;
use Domain\Shared\Models\BaseModel;
use Domain\Views\InsertViews\Models\InsertView;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

final class JewelleryView extends BaseModel
{
    public const TYPE_RESOURCE = 'jewelleryViews';

    public function discounts(): BelongsToMany
    {
        return $this->belongsToMany(Discount::class);
    }

    public function prcsMetalSample(): BelongsTo
    {
        return $this->belongsTo(PrcsMetalSample::class);
    }

    public function prcsMetalColour(): BelongsTo
    {
        return $this->belongsTo(PrcsMetalColour::class);
    }

    public function prcsMetal(): BelongsTo
    {
        return $this->belongsTo(PrcsMetal::class);
    }

    public function prcsMetalCoverages(): BelongsToMany
    {
        return $this->belongsToMany(PrcsMetalCoverage::class, 'jewellery_prcs_metal_coverage','jewellery_id','prcs_metal_coverage_id');
    }

    public function insertViews(): HasMany
    {
        return $this->hasMany(InsertView::class,'jewellery_id');
    }

    public function jewelleryCategory(): BelongsTo
    {
        return $this->belongsTo(JewelleryCategory::class);
    }
}
