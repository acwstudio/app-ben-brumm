<?php

declare(strict_types=1);

namespace Domain\JewelleryProperties\Weaving\Models;

use Domain\JewelleryProperties\BraceletProp\Models\BraceletProp;
use Domain\JewelleryProperties\BraceletPropWeaving\Models\BraceletPropWeaving;
use Domain\JewelleryProperties\ChainProp\Models\ChainProp;
use Domain\JewelleryProperties\ChainPropWeaving\Models\ChainPropWeaving;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

final class Weaving extends Model
{
    const TYPE_RESOURCE = 'weavings';

    public function braceletProps(): BelongsToMany
    {
        return $this->belongsToMany(BraceletProp::class, 'bracelet_prop_weavings');
    }

    public function chainProps(): BelongsToMany
    {
        return $this->belongsToMany(ChainProp::class, 'chain_prop_weavings');
    }

    public function braceletPropWeavings(): HasMany
    {
        return $this->hasMany(BraceletPropWeaving::class);
    }

    public function chainPropWeavings(): HasMany
    {
        return $this->hasMany(ChainPropWeaving::class);
    }
}
