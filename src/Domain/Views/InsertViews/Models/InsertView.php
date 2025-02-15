<?php

declare(strict_types=1);

namespace Domain\Views\InsertViews\Models;

use Domain\Shared\Models\BaseModel;
use Domain\Views\JewelleryViews\Models\JewelleryView;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

final class InsertView extends BaseModel
{
    public const TYPE_RESOURCE = 'InsertViews';

    public function jewelleryView(): BelongsTo
    {
        return $this->belongsTo(JewelleryView::class, 'jewellery_id');
    }
}
