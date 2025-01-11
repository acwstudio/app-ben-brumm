<?php

declare(strict_types=1);

namespace Domain\JewelleryProperties\CharmPendantProp\Models;

use Domain\Jewelleries\Jewellery\Models\Jewellery;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

final class CharmPendantProp extends Model
{
    const TYPE_RESOURCE = 'charmPendantProps';

    public function jewellery(): BelongsTo
    {
        return $this->belongsTo(Jewellery::class);
    }
}
