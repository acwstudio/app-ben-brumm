<?php

declare(strict_types=1);

namespace Domain\Inserts\Models;

use Domain\Shared\Models\BaseModel;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Insert extends BaseModel
{
    public function jewelleries(): BelongsToMany
    {
        return $this->belongsToMany('Domain\Jewelleries\Models\Jewellery');
    }
}
