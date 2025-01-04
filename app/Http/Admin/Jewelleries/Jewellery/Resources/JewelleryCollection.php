<?php

declare(strict_types=1);

namespace App\Http\Admin\Jewelleries\Jewellery\Resources;

use App\Http\Admin\Shared\Resources\Traits\IncludeRelatedEntitiesCollectionTrait;
use Illuminate\Http\Resources\Json\ResourceCollection;

final class JewelleryCollection extends ResourceCollection
{
    use IncludeRelatedEntitiesCollectionTrait;
}
