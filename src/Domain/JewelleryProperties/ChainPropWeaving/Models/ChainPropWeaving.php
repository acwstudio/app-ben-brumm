<?php

declare(strict_types=1);

namespace Domain\JewelleryProperties\ChainPropWeaving\Models;

use Domain\JewelleryProperties\ChainProp\Models\ChainProp;
use Domain\JewelleryProperties\Weaving\Models\Weaving;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

final class ChainPropWeaving extends Model
{
    const TYPE_RESOURCE = 'chainPropWeavings';

    public function chainProp(): BelongsTo
    {
        return $this->belongsTo(ChainProp::class);
    }

    public function weaving(): BelongsTo
    {
        return $this->belongsTo(Weaving::class);
    }
}
