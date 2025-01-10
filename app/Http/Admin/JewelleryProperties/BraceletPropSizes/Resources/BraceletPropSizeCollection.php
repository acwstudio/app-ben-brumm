<?php

declare(strict_types=1);

namespace App\Http\Admin\JewelleryProperties\BraceletPropSizes\Resources;

use App\Http\Admin\Shared\Resources\Traits\IncludeRelatedEntitiesCollectionTrait;
use Illuminate\Http\Resources\Json\ResourceCollection;

final class BraceletPropSizeCollection extends ResourceCollection
{
    use IncludeRelatedEntitiesCollectionTrait;
}
