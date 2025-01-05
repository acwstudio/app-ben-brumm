<?php

declare(strict_types=1);

namespace Domain\Site;

use Domain\Jewelleries\Models\Jewellery;
use Domain\JewelleryProperties\Models\BraceletPropSize;
use Domain\JewelleryProperties\Models\BraceletSize;
use Domain\Shared\Models\BaseModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

final class BraceletPropView extends BaseModel
{
    public const TYPE_RESOURCE = 'BraceletPropViews';

    public function braceletSizes(): BelongsToMany
    {
        return $this->belongsToMany(BraceletSize::class, 'bracelet_prop_sizes', 'bracelet_prop_id');
    }

    public function braceletPrices(): HasMany
    {
        return $this->hasMany(BraceletPropSize::class, 'bracelet_prop_id');
    }

    public function jewellery(): BelongsTo
    {
        return $this->belongsTo(Jewellery::class);
    }
}
