<?php

namespace Domain\Site;

use Domain\Jewelleries\Models\BraceletSize;
use Domain\PreciousMetals\Models\PrcsMetal;
use Domain\PreciousMetals\Models\PrcsMetalColour;
use Domain\PreciousMetals\Models\PrcsMetalSample;
use Domain\Shared\Models\BaseModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class JewelleryBracelet extends BaseModel
{
    public function prcsMetal(): BelongsTo
    {
        return $this->belongsTo(PrcsMetal::class);
    }

    public function prcsMetalColour(): BelongsTo
    {
        return $this->belongsTo(PrcsMetalColour::class);
    }

    public function prcsMetalSample(): BelongsTo
    {
        return $this->belongsTo(PrcsMetalSample::class);
    }

    public function braceletSizes(): BelongsToMany
    {
        return $this->belongsToMany(BraceletSize::class, 'bracelet_prop_bracelet_size','bracelet_prop_id')->withPivot('quantity','price');
    }
}
