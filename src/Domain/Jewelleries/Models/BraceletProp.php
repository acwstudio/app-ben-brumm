<?php

namespace Domain\Jewelleries\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class BraceletProp extends Model
{
    public function braceletSizes(): HasMany
    {
        return $this->hasMany(BraceletSize::class);
    }
}
