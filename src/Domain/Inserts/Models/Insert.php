<?php

declare(strict_types=1);

namespace Domain\Inserts\Models;

use Domain\Jewelleries\Models\Jewellery;
use Domain\Shared\Models\BaseModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

final class Insert extends BaseModel
{
    public function jewelleries(): BelongsTo
    {
        return $this->belongsTo(Jewellery::class);
    }

    public function stones(): BelongsTo
    {
        return $this->belongsTo(Stone::class);
    }

    public function insertShapes(): BelongsTo
    {
        return $this->belongsTo(InsertShape::class);
    }

    public function insertColours(): BelongsTo
    {
        return $this->belongsTo(InsertColour::class);
    }

    public function insertProperty(): BelongsTo
    {
        return $this->belongsTo(InsertProperty::class);
    }
}
