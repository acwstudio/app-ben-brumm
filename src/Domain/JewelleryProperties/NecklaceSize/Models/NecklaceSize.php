<?php

declare(strict_types=1);

namespace Domain\JewelleryProperties\NecklaceSize\Models;

use Domain\JewelleryProperties\NecklaceProp\Models\NecklaceProp;
use Domain\JewelleryProperties\NecklacePropSize\Models\NecklacePropSize;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

final class NecklaceSize extends Model
{
    const TYPE_RESOURCE = 'necklaceSizes';

    public function necklaceProps(): BelongsToMany
    {
        return $this->belongsToMany(NecklaceProp::class, 'necklace_prop_sizes');
    }

    public function necklacePropSizes(): HasMany
    {
        return $this->hasMany(NecklacePropSize::class);
    }
}
