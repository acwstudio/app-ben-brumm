<?php

declare(strict_types=1);

namespace App\Http\Admin\JewelleryProperties\EarringProps\Resources;

use App\Http\Admin\Shared\Resources\Traits\IncludeRelatedEntitiesCollectionTrait;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

final class EarringPropCollection extends ResourceCollection
{
    use IncludeRelatedEntitiesCollectionTrait;
}
