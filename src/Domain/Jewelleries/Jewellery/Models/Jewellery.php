<?php

declare(strict_types=1);

namespace Domain\Jewelleries\Jewellery\Models;

use Domain\Inserts\Insert\Models\Insert;
use Domain\Inserts\Stone\Models\Stone;
use Domain\Jewelleries\JewelleryCategory\Models\JewelleryCategory;
use Domain\JewelleryProperties\BraceletProp\Models\BraceletProp;
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

    public function braceletProp(): HasOne
    {
        return $this->hasOne(BraceletProp::class);
    }

    public function jewelleryCategory(): BelongsTo
    {
        return $this->belongsTo(JewelleryCategory::class);
    }

    public function braceletPropView(): HasOne
    {
        return $this->hasOne(BraceletPropView::class, 'jewellery_id', 'id');
    }

    public function stones(): BelongsToMany
    {
        return $this->belongsToMany(Stone::class, 'inserts', 'jewellery_id', 'stone_id');
    }
}
