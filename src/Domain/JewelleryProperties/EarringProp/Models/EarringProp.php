<?php

declare(strict_types=1);

namespace Domain\JewelleryProperties\EarringProp\Models;

use Domain\Jewelleries\Jewellery\Models\Jewellery;
use Domain\JewelleryProperties\Clasp\Models\Clasp;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

final class EarringProp extends Model
{
    const TYPE_RESOURCE = 'earringProps';

    public function jewellery(): BelongsTo
    {
        return $this->belongsTo(Jewellery::class);
    }

    public function clasp(): BelongsTo
    {
        return $this->belongsTo(Clasp::class);
    }
}
