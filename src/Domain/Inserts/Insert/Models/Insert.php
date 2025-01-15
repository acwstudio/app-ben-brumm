<?php

declare(strict_types=1);

namespace Domain\Inserts\Insert\Models;

use Domain\Inserts\InsertColour\Models\InsertColour;
use Domain\Inserts\InsertProperty\Models\InsertProperty;
use Domain\Inserts\InsertShape\Models\InsertShape;
use Domain\Inserts\Stone\Models\Stone;
use Domain\Jewelleries\Jewellery\Models\Jewellery;
use Domain\Shared\Models\BaseModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

final class Insert extends BaseModel
{
    const TYPE_RESOURCE = 'inserts';

    protected $guarded = [];

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
