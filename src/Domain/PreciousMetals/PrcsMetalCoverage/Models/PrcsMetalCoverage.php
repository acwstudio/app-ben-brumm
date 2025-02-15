<?php

declare(strict_types=1);

namespace Domain\PreciousMetals\PrcsMetalCoverage\Models;

use Domain\Shared\Models\BaseModel;
use Domain\Views\JewelleryViews\Models\JewelleryView;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class PrcsMetalCoverage extends BaseModel
{
    const TYPE_RESOURCE = 'prcsMetalCoverages';

    public function jewelleryViews(): BelongsToMany
    {
        return $this->belongsToMany(JewelleryView::class, 'jewellery_view_prcs_metal_coverage', 'prcs_metal_coverage_id', 'jewellery_view_id');
    }
}
