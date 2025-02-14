<?php

declare(strict_types=1);

namespace App\Http\Admin\PreciousMetals\PrcsMetal\Resources;

use App\Http\Admin\Shared\Resources\Traits\IncludeRelatedEntitiesCollectionTrait;
use Illuminate\Http\Resources\Json\ResourceCollection;

final class PrcsMetalCollection extends ResourceCollection
{
    use IncludeRelatedEntitiesCollectionTrait;
}
