<?php

declare(strict_types=1);

namespace Domain\JewelleryProperties\ChainPropSize\Models;

use Domain\JewelleryProperties\ChainProp\Models\ChainProp;
use Domain\JewelleryProperties\ChainSize\Models\ChainSize;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

final class ChainPropSize extends Model
{
    const TYPE_RESOURCE = 'chainPropSizes';

    public function chainProp(): BelongsTo
    {
        return $this->belongsTo(ChainProp::class);
    }

    public function chainSize(): BelongsTo
    {
        return $this->belongsTo(ChainSize::class);
    }
}
