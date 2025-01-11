<?php

declare(strict_types=1);

namespace Domain\JewelleryProperties\CufflinkProp\Models;

use Domain\Jewelleries\Jewellery\Models\Jewellery;
use Domain\Shared\Models\BaseModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

final class CuffLinkProp extends BaseModel
{
    const TYPE_RESOURCE = 'cufflinkProps';

    public function jewellery(): BelongsTo
    {
        return $this->belongsTo(Jewellery::class);
    }
}
