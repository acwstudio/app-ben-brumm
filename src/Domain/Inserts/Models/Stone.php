<?php

declare(strict_types=1);

namespace Domain\Inserts\Models;

use Domain\Shared\Models\BaseModel;
use Domain\Site\BraceletPropView;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

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
