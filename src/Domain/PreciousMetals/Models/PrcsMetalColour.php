<?php

declare(strict_types=1);

namespace Domain\PreciousMetals\Models;

use Domain\Shared\Models\BaseModel;
use Domain\Site\BraceletPropView;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PrcsMetalColour extends BaseModel
{
    public function jewelleryBracelets(): HasMany
    {
        return $this->hasMany(BraceletPropView::class);
    }
}
