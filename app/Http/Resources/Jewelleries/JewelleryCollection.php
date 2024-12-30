<?php

declare(strict_types=1);

namespace App\Http\Resources\Jewelleries;

use App\Http\Resources\IncludeRelatedEntitiesCollectionTrait;
use Illuminate\Http\Resources\Json\ResourceCollection;

final class JewelleryCollection extends ResourceCollection
{
    use IncludeRelatedEntitiesCollectionTrait;
}
