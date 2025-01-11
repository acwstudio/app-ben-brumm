<?php

declare(strict_types=1);

namespace Domain\JewelleryProperties\NecklaceProp\Models;

use Domain\Jewelleries\Jewellery\Models\Jewellery;
use Domain\JewelleryProperties\NecklacePropSize\Models\NecklacePropSize;
use Domain\JewelleryProperties\NecklaceSize\Models\NecklaceSize;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

final class NecklaceProp extends Model
{
    const TYPE_RESOURCE = 'necklaceProps';

    public function jewellery(): BelongsTo
    {
        return $this->belongsTo(Jewellery::class);
    }

    public function necklaceSizes(): BelongsToMany
    {
        return $this->belongsToMany(NecklaceSize::class, 'necklace_prop_sizes');
    }

    public function necklacePropSizes(): HasMany
    {
        return $this->hasMany(NecklacePropSize::class);
    }
}
