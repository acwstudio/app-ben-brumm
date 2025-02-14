<?php

declare(strict_types=1);

namespace Domain\Views\JewelleryViews\Models;

use Domain\Discounts\Discount\Models\Discount;
use Domain\PreciousMetals\PrcsMetalSample\Models\PrcsMetalSample;
use Domain\Shared\Models\BaseModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

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
}
