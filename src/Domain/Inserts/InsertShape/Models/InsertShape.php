<?php

declare(strict_types=1);

namespace Domain\Inserts\InsertShape\Models;

use Domain\Inserts\Insert\Models\Insert;
use Domain\Jewelleries\Jewellery\Models\Jewellery;
use Domain\Shared\Models\BaseModel;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

final class InsertShape extends BaseModel
{
    const TYPE_RESOURCE = 'insertShapes';

    protected $guarded = [];

    public function inserts(): HasMany
    {
        return $this->hasMany(Insert::class);
    }

    public function jewelleries(): BelongsToMany
    {
        return $this->belongsToMany(Jewellery::class, 'inserts');
    }
}
