<?php

namespace Domain\Site;

use Domain\Jewelleries\Models\ChainPropSize;
use Domain\Jewelleries\Models\ChainSize;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ChainPropView extends Model
{
    public function chainSizes(): BelongsToMany
    {
        return $this->belongsToMany(ChainSize::class, 'chain_prop_sizes', 'chain_prop_id');
    }

    public function chainPrices(): HasMany
    {
        return $this->hasMany(ChainPropSize::class, 'chain_prop_id');
    }
}
