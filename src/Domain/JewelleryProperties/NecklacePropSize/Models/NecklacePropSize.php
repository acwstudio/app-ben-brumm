<?php

declare(strict_types=1);

namespace Domain\JewelleryProperties\NecklacePropSize\Models;

use Domain\JewelleryProperties\NecklaceProp\Models\NecklaceProp;
use Domain\JewelleryProperties\NecklaceSize\Models\NecklaceSize;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

final class NecklacePropSize extends Model
{
    const TYPE_RESOURCE = 'necklacePropSizes';

    public function necklaceProp(): BelongsTo
    {
        return $this->belongsTo(NecklaceProp::class);
    }

    public function necklaceSize(): BelongsTo
    {
        return $this->belongsTo(NecklaceSize::class);
    }
}
