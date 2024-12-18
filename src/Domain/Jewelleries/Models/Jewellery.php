<?php

declare(strict_types=1);

namespace Domain\Jewelleries\Models;

use Domain\Inserts\Models\Insert;
use Domain\Shared\Models\BaseModel;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Jewellery extends BaseModel
{
    public function inserts(): BelongsToMany
    {
        return $this->belongsToMany(Insert::class);
    }
}
