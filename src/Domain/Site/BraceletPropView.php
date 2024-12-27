<?php

namespace Domain\Site;

use Domain\Jewelleries\Models\BraceletPrice;
use Domain\Jewelleries\Models\BraceletPropSize;
use Domain\Jewelleries\Models\BraceletSize;
use Domain\Shared\Models\BaseModel;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class BraceletPropView extends BaseModel
{
    public function braceletSizes(): BelongsToMany
    {
        return $this->belongsToMany(BraceletSize::class, 'bracelet_prop_sizes', 'bracelet_prop_id');
    }

    public function braceletPrices(): HasMany
    {
        return $this->hasMany(BraceletPropSize::class, 'bracelet_prop_id');
    }
}
