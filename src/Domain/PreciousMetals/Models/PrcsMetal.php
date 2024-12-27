<?php

declare(strict_types=1);

namespace Domain\PreciousMetals\Models;

use Domain\Shared\Models\BaseModel;
use Domain\Site\JewelleryBracelet;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PrcsMetal extends BaseModel
{
    public function jewelleryBracelets(): HasMany
    {
        return $this->hasMany(JewelleryBracelet::class);
    }
}
