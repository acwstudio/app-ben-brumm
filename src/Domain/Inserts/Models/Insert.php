<?php

declare(strict_types=1);

namespace Domain\Inserts\Models;

use Domain\Jewelleries\Models\Jewellery;
use Domain\Shared\Models\BaseModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

final class Insert extends BaseModel
{
    const TYPE_RESOURCE = 'inserts';

    public function jewellery(): BelongsTo
    {
        return $this->belongsTo(Jewellery::class);
    }

    public function stone(): BelongsTo
    {
        return $this->belongsTo(Stone::class);
    }

    public function insertShape(): BelongsTo
    {
        return $this->belongsTo(InsertShape::class);
    }

    public function insertColour(): BelongsTo
    {
        return $this->belongsTo(InsertColour::class);
    }

    public function insertProperty(): BelongsTo
    {
        return $this->belongsTo(InsertProperty::class);
    }
}
