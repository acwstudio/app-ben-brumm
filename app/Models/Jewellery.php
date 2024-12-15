<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Jewellery extends Model
{
    public function inserts(): BelongsToMany
    {
        return $this->belongsToMany(Insert::class);
    }
}
