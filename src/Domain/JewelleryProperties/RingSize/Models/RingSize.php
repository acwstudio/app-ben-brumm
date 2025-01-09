<?php

declare(strict_types=1);

namespace Domain\JewelleryProperties\RingSize\Models;

use Domain\JewelleryProperties\RingProp\Models\RingProp;
use Domain\JewelleryProperties\RingPropSize\Models\RingPropSize;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

final class RingSize extends Model
{
    const TYPE_RESOURCE = 'ringSizes';

    public function ringProps(): BelongsToMany
    {
        return $this->belongsToMany(RingProp::class, 'ring_prop_sizes');
    }

    public function ringPropSizes(): HasMany
    {
        return $this->hasMany(RingPropSize::class);
    }
}
