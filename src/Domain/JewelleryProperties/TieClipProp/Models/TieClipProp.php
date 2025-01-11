<?php

declare(strict_types=1);

namespace Domain\JewelleryProperties\TieClipProp\Models;

use Domain\Jewelleries\Jewellery\Models\Jewellery;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

final class TieClipProp extends Model
{
    const TYPE_RESOURCE = 'tieClipProps';

    public function jewellery(): BelongsTo
    {
        return $this->belongsTo(Jewellery::class);
    }
}
