<?php

declare(strict_types=1);

namespace Domain\JewelleryProperties\BraceletPropWeaving\Models;

use Domain\JewelleryProperties\BraceletProp\Models\BraceletProp;
use Domain\JewelleryProperties\Weaving\Models\Weaving;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

final class BraceletPropWeaving extends Model
{
    const TYPE_RESOURCE = 'braceletPropWeavings';

    public function braceletProp(): BelongsTo
    {
        return $this->belongsTo(BraceletProp::class);
    }

    public function weaving(): BelongsTo
    {
        return $this->belongsTo(Weaving::class);
    }
}
