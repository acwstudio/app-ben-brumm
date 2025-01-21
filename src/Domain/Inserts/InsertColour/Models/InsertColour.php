<?php

declare(strict_types=1);

namespace Domain\Inserts\InsertColour\Models;

use Domain\Inserts\Insert\Models\Insert;
use Domain\Jewelleries\Jewellery\Models\Jewellery;
use Domain\Shared\Models\BaseModel;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

final class InsertColour extends BaseModel
{
    const TYPE_RESOURCE = 'insertColours';

    protected $guarded = [];

    public function inserts(): HasMany
    {
        return $this->hasMany(Insert::class);
    }

    public function jewelleries(): BelongsToMany
    {
        return $this->belongsToMany(Jewellery::class, 'inserts', 'insert_colour_id', 'jewellery_id');
    }
}
