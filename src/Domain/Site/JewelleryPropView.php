<?php

declare(strict_types=1);

namespace Domain\Site;

use Domain\Discounts\Discount\Models\Discount;
use Domain\Discounts\ShockPrice\Models\ShockPrice;
use Domain\Shared\Models\BaseModel;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

final class JewelleryPropView extends BaseModel
{
    public const TYPE_RESOURCE = 'jewelleryPropViews';

    public function discounts(): BelongsToMany
    {
        return $this->belongsToMany(Discount::class);
    }
}
