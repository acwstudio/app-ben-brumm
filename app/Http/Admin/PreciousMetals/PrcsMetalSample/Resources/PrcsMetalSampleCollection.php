<?php

declare(strict_types=1);

namespace App\Http\Admin\PreciousMetals\PrcsMetalSample\Resources;

use App\Http\Admin\Shared\Resources\Traits\IncludeRelatedEntitiesCollectionTrait;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

final class PrcsMetalSampleCollection extends ResourceCollection
{
    use IncludeRelatedEntitiesCollectionTrait;
}
