<?php

declare(strict_types=1);

namespace Domain\Jewelleries\Models;

use Domain\Inserts\Models\Insert;
use Domain\Shared\Models\BaseModel;
use Domain\Site\BraceletPropView;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

final class Jewellery extends BaseModel
{
    public const TYPE_RESOURCE = 'Jewelleries';

    public function inserts(): HasMany
    {
        return $this->hasMany(Insert::class);
    }

    public function jewelleryCategory(): BelongsTo
    {
        return $this->belongsTo(JewelleryCategory::class);
    }

    public function braceletPropView(): HasOne
    {
        return $this->hasOne(BraceletPropView::class, 'jewellery_id', 'id');
    }
}
