<?php

declare(strict_types=1);

namespace Domain\Inserts\StoneType\Models;

use Domain\Inserts\Insert\Models\Insert;
use Domain\Inserts\Stone\Models\Stone;
use Domain\Shared\Models\BaseModel;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

final class StoneType extends BaseModel
{
    const TYPE_RESOURCE = 'stoneTypes';

    protected $guarded = [];

    public function stones(): HasMany
    {
        return $this->hasMany(Stone::class);
    }

    public function inserts(): BelongsToMany
    {
        return $this->belongsToMany(Insert::class, 'stones');
    }
}
