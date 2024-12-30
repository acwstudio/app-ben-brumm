<?php

declare(strict_types=1);

namespace Domain\Jewelleries\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

final class JewelleryCategory extends Model
{
    public const TYPE_RESOURCE = 'JewelleryCategories';

    public function jewelleries(): HasMany
    {
        return $this->hasMany(Jewellery::class);
    }
}
