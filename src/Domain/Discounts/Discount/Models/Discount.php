<?php

declare(strict_types=1);

namespace Domain\Discounts\Discount\Models;

use Domain\Jewelleries\Jewellery\Models\Jewellery;
use Domain\Shared\Models\BaseModel;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

final class Discount extends BaseModel
{
    public const TYPE_RESOURCE = 'discounts';

    public function jewelleries(): BelongsToMany
    {
        return $this->belongsToMany(Jewellery::class);
    }
}
