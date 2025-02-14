<?php

declare(strict_types=1);

namespace Domain\PreciousMetals\PrcsMetalColour\Models;

use Domain\Shared\Models\BaseModel;
use Domain\Views\BraceletPropViews\Models\BraceletPropView;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PrcsMetalColour extends BaseModel
{
    const TYPE_RESOURCE = 'prcsMetalColours';

    public function jewelleryBracelets(): HasMany
    {
        return $this->hasMany(BraceletPropView::class);
    }
}
