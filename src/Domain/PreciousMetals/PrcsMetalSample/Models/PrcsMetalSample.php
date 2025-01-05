<?php

declare(strict_types=1);

namespace Domain\PreciousMetals\PrcsMetalSample\Models;

use Domain\Shared\Models\BaseModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PrcsMetalSample extends BaseModel
{
    const TYPE_RESOURCE = 'prcsMetalSamples';
    public function prcsMetalSample(): HasMany
    {
        return $this->hasMany(PrcsMetalSample::class);
    }
}
