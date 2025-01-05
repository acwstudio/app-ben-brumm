<?php

declare(strict_types=1);

namespace Domain\Inserts\InsertProperty\Models;

use Domain\Inserts\Insert\Models\Insert;
use Domain\Shared\Models\BaseModel;
use Illuminate\Database\Eloquent\Relations\HasOne;

final class InsertProperty extends BaseModel
{
    const TYPE_RESOURCE = 'insertProperties';

    public function insert(): HasOne
    {
        return $this->hasOne(Insert::class);
    }
}

