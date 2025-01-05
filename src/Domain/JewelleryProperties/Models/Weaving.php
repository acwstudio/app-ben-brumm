<?php

declare(strict_types=1);

namespace Domain\JewelleryProperties\Models;

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

    public function braceletPropWeavings(): HasMany
    {
        return $this->hasMany(BraceletPropWeaving::class);
    }

    public function chainPropWeavings(): HasMany
    {
        return $this->hasMany(ChainPropWeaving::class);
    }
}
