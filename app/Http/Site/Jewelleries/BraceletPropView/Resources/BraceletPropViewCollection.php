<?php

declare(strict_types=1);

namespace App\Http\Site\Jewelleries\BraceletPropView\Resources;

use App\Http\Admin\Shared\Resources\Traits\IncludeRelatedEntitiesCollectionTrait;
use Illuminate\Http\Resources\Json\ResourceCollection;

final class BraceletPropViewCollection extends ResourceCollection
{
    use IncludeRelatedEntitiesCollectionTrait;
}
