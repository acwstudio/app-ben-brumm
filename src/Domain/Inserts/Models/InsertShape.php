<?php

declare(strict_types=1);

namespace Domain\Inserts\Models;

use Domain\Shared\Models\BaseModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

final class InsertShape extends BaseModel
{
    const TYPE_RESOURCE = 'insertShapes';

    public function inserts(): HasMany
    {
        return $this->hasMany(Insert::class);
    }
}
