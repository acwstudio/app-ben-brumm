<?php

declare(strict_types=1);

namespace Domain\JewelleryProperties\BroochProp\Models;

use Domain\Jewelleries\Jewellery\Models\Jewellery;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

final class BroochProp extends Model
{
    const TYPE_RESOURCE = 'broochProps';

    public function jewellery(): BelongsTo
    {
        return $this->belongsTo(Jewellery::class);
    }
}
