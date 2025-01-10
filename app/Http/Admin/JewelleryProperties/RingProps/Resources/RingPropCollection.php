<?php

declare(strict_types=1);

namespace App\Http\Admin\JewelleryProperties\RingProps\Resources;

use App\Http\Admin\Shared\Resources\Traits\IncludeRelatedEntitiesCollectionTrait;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

final class RingPropCollection extends ResourceCollection
{
    use IncludeRelatedEntitiesCollectionTrait;
}
