<?php

declare(strict_types=1);

namespace Domain\JewelleryProperties\RingProp\Models;

use Domain\Jewelleries\Jewellery\Models\Jewellery;
use Domain\JewelleryProperties\RingPropSize\Models\RingPropSize;
use Domain\JewelleryProperties\RingSize\Models\RingSize;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

final class RingProp extends Model
{
    const TYPE_RESOURCE = 'ringProps';

    public function jewellery(): BelongsTo
    {
        return $this->belongsTo(Jewellery::class);
    }

    public function ringSizes(): BelongsToMany
    {
        return $this->belongsToMany(RingSize::class, 'ring_prop_sizes');
    }

    public function ringPropSizes(): HasMany
    {
        return $this->hasMany(RingPropSize::class);
    }
}
