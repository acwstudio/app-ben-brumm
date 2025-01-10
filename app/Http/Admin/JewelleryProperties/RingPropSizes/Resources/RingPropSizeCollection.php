<?php

declare(strict_types=1);

namespace App\Http\Admin\JewelleryProperties\RingPropSizes\Resources;

use App\Http\Admin\Shared\Resources\Traits\IncludeRelatedEntitiesCollectionTrait;
use Illuminate\Http\Resources\Json\ResourceCollection;

final class RingPropSizeCollection extends ResourceCollection
{
    use IncludeRelatedEntitiesCollectionTrait;
}
