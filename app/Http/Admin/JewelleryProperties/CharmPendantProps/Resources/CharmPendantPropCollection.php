<?php

declare(strict_types=1);

namespace App\Http\Admin\JewelleryProperties\CharmPendantProps\Resources;

use App\Http\Admin\Shared\Resources\Traits\IncludeRelatedEntitiesCollectionTrait;
use Illuminate\Http\Resources\Json\ResourceCollection;

final class CharmPendantPropCollection extends ResourceCollection
{
    use IncludeRelatedEntitiesCollectionTrait;
}
