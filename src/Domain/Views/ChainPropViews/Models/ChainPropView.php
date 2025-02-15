<?php

declare(strict_types=1);

namespace Domain\Views\ChainPropViews\Models;

use Domain\JewelleryProperties\ChainPropSize\Models\ChainPropSize;
use Domain\JewelleryProperties\ChainSize\Models\ChainSize;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

final class ChainPropView extends Model
{
    public const TYPE_RESOURCE = 'chainPropViews';

    public function chainSizes(): BelongsToMany
    {
        return $this->belongsToMany(ChainSize::class, 'chain_prop_sizes', 'chain_prop_id');
    }

    public function chainPrices(): HasMany
    {
        return $this->hasMany(ChainPropSize::class, 'chain_prop_id');
    }
}
