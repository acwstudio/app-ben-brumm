<?php

declare(strict_types=1);

namespace Domain\JewelleryProperties\ChainProp\Models;

use Domain\Jewelleries\Jewellery\Models\Jewellery;
use Domain\JewelleryProperties\ChainPropSize\Models\ChainPropSize;
use Domain\JewelleryProperties\ChainPropWeaving\Models\ChainPropWeaving;
use Domain\JewelleryProperties\ChainSize\Models\ChainSize;
use Domain\JewelleryProperties\Weaving\Models\Weaving;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

final class ChainProp extends Model
{
    const TYPE_RESOURCE = 'chainProps';

    public function chainPropSizes(): HasMany
    {
        return $this->hasMany(ChainPropSize::class);
    }

    public function chainPropWeavings(): HasMany
    {
        return $this->hasMany(ChainPropWeaving::class);
    }

    public function jewellery(): BelongsTo
    {
        return $this->belongsTo(Jewellery::class);
    }

    public function chainSizes(): BelongsToMany
    {
        return $this->belongsToMany(ChainSize::class, 'chain_prop_sizes');
    }

    public function weavings(): BelongsToMany
    {
        return $this->belongsToMany(Weaving::class, 'chain_prop_weavings');
    }
}
