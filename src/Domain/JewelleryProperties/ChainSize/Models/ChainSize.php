<?php

declare(strict_types=1);

namespace Domain\JewelleryProperties\ChainSize\Models;

use Domain\JewelleryProperties\ChainProp\Models\ChainProp;
use Domain\JewelleryProperties\ChainPropSize\Models\ChainPropSize;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

final class ChainSize extends Model
{
    const TYPE_RESOURCE = 'chainSizes';

    public function chainProps(): BelongsToMany
    {
        return $this->belongsToMany(ChainProp::class, 'chain_prop_sizes');
    }

    public function chainPropSizes(): BelongsTo
    {
        return $this->belongsTo(ChainPropSize::class);
    }
}
