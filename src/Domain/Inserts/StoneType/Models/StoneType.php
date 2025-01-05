<?php

declare(strict_types=1);

namespace Domain\Inserts\StoneType\Models;

use Domain\Inserts\Stone\Models\Stone;
use Domain\Shared\Models\BaseModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

final class StoneType extends BaseModel
{
    const TYPE_RESOURCE = 'stoneTypes';

    public function stones(): HasMany
    {
        return $this->hasMany(Stone::class);
    }
}
