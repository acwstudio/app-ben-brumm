<?php

declare(strict_types=1);

namespace Domain\PreciousMetals\PrcsMetalColour\Models;

use Domain\Shared\Models\BaseModel;
use Domain\Views\BraceletPropViews\Models\BraceletPropView;
use Domain\Views\JewelleryViews\Models\JewelleryView;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PrcsMetalColour extends BaseModel
{
    const TYPE_RESOURCE = 'prcsMetalColours';

    public function jewelleryBracelets(): HasMany
    {
        return $this->hasMany(BraceletPropView::class);
    }

    public function jewelleryViews(): HasMany
    {
        return $this->hasMany(JewelleryView::class);
    }
}
