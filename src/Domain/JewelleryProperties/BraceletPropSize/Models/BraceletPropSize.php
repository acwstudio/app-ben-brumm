<?php

declare(strict_types=1);

namespace Domain\JewelleryProperties\BraceletPropSize\Models;

use Domain\JewelleryProperties\BraceletProp\Models\BraceletProp;
use Domain\JewelleryProperties\BraceletSize\Models\BraceletSize;
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
