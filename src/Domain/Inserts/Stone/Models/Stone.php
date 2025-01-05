<?php

declare(strict_types=1);

namespace Domain\Inserts\Stone\Models;

use Domain\Inserts\Insert\Models\Insert;
use Domain\Inserts\StoneType\Models\StoneType;
use Domain\Shared\Models\BaseModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

final class Stone extends BaseModel
{
    const TYPE_RESOURCE = 'stones';

    public function inserts(): HasMany
    {
        return $this->hasMany(Insert::class);
    }

    public function stoneType(): BelongsTo
    {
        return $this->belongsTo(StoneType::class);
    }
}
