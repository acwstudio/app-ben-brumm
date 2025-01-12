<?php

declare(strict_types=1);

namespace Domain\JewelleryProperties\PiercingProp\Models;

use Domain\Jewelleries\Jewellery\Models\Jewellery;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

final class PiercingProp extends Model
{
    const TYPE_RESOURCE = 'piercingProps';

    public function jewellery(): BelongsTo
    {
        return $this->belongsTo(Jewellery::class);
    }
}
