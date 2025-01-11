<?php

declare(strict_types=1);

namespace Domain\JewelleryProperties\PendantProp\Models;

use Domain\Jewelleries\Jewellery\Models\Jewellery;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

final class PendantProp extends Model
{
    const TYPE_RESOURCE = 'pendantProps';

    public function jewellery(): BelongsTo
    {
        return $this->belongsTo(Jewellery::class);
    }
}
