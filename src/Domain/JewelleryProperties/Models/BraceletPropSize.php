<?php

declare(strict_types=1);

namespace Domain\JewelleryProperties\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

final class BraceletPropSize extends Model
{
    public const TYPE_RESOURCE = 'BraceletPropSizes';

    public function braceletProp(): BelongsTo
    {
        return $this->belongsTo(BraceletProp::class);
    }

    public function braceletSize(): BelongsTo
    {
        return $this->belongsTo(BraceletSize::class,);
    }
}
