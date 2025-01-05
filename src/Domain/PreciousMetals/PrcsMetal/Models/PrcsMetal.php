<?php

declare(strict_types=1);

namespace Domain\PreciousMetals\PrcsMetal\Models;

use Domain\Shared\Models\BaseModel;
use Domain\Site\BraceletPropView;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PrcsMetal extends BaseModel
{
    const TYPE_RESOURCE = 'prcsMetals';

    public function jewelleryBracelets(): HasMany
    {
        return $this->hasMany(BraceletPropView::class);
    }
}
