<?php

declare(strict_types=1);

namespace Domain\JewelleryProperties\BraceletProp\Models;

use Domain\Jewelleries\Jewellery\Models\Jewellery;
use Domain\JewelleryProperties\BraceletPropSize\Models\BraceletPropSize;
use Domain\JewelleryProperties\BraceletPropWeaving\Models\BraceletPropWeaving;
use Domain\JewelleryProperties\BraceletSize\Models\BraceletSize;
use Domain\JewelleryProperties\Weaving\Models\Weaving;
use Domain\Shared\Models\BaseModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

final class BraceletProp extends BaseModel
{
    public const TYPE_RESOURCE = 'braceletProps';

    public function braceletPropSizes(): HasMany
    {
        return $this->hasMany(BraceletPropSize::class);
    }

    public function braceletPropWeavings(): HasMany
    {
        return $this->hasMany(BraceletPropWeaving::class);
    }

    public function jewellery(): BelongsTo
    {
        return $this->belongsTo(Jewellery::class);
    }

    public function braceletSizes(): BelongsToMany
    {
        return $this->belongsToMany(BraceletSize::class, 'bracelet_prop_sizes');
    }

    public function weavings(): BelongsToMany
    {
        return $this->belongsToMany(Weaving::class, 'bracelet_prop_weavings');
    }
}
