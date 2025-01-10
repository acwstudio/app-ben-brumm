<?php

declare(strict_types=1);

namespace Domain\JewelleryProperties\RingPropSize\Models;

use Domain\JewelleryProperties\RingProp\Models\RingProp;
use Domain\JewelleryProperties\RingSize\Models\RingSize;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

final class RingPropSize extends Model
{
    const TYPE_RESOURCE = 'ringPropSizes';

    public function ringProp(): BelongsTo
    {
        return $this->belongsTo(RingProp::class);
    }

    public function ringSize(): BelongsTo
    {
        return $this->belongsTo(RingSize::class);
    }
}
