<?php

declare(strict_types=1);

namespace Domain\JewelleryProperties\BraceletSize\Models;

use Domain\JewelleryProperties\BraceletProp\Models\BraceletProp;
use Domain\JewelleryProperties\BraceletPropSize\Models\BraceletPropSize;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

final class BraceletSize extends Model
{
    const TYPE_RESOURCE = 'braceletSizes';

    public function braceletPropSizes(): HasMany
    {
        return $this->hasMany(BraceletPropSize::class);
    }

    public function braceletProps(): BelongsToMany
    {
        return $this->belongsToMany(BraceletProp::class, 'bracelet_prop_sizes');
    }
}
