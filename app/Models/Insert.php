<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Insert extends Model
{
    public function jewelleries(): BelongsToMany
    {
        return $this->belongsToMany('App\Models\Jewellery');
    }
}
