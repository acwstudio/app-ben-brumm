<?php

declare(strict_types=1);

namespace Domain\PreciousMetals\Models;

use Domain\Shared\Models\BaseModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PrcsMetalSample extends BaseModel
{
    public function prcsMetalSample(): HasMany
    {
        return $this->hasMany(PrcsMetalSample::class);
    }
}
