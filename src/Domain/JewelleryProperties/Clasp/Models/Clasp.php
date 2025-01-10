<?php

declare(strict_types=1);

namespace Domain\JewelleryProperties\Clasp\Models;

use Domain\JewelleryProperties\EarringProp\Models\EarringProp;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

final class Clasp extends Model
{
    const TYPE_RESOURCE = 'clasps';

    public function earringProps(): HasMany
    {
        return $this->hasMany(EarringProp::class);
    }
}
