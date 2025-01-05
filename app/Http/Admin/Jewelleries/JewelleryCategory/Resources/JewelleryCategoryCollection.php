<?php

declare(strict_types=1);

namespace App\Http\Admin\Jewelleries\JewelleryCategory\Resources;

use App\Http\Admin\Shared\Resources\Traits\IncludeRelatedEntitiesCollectionTrait;
use Illuminate\Http\Resources\Json\ResourceCollection;

final class JewelleryCategoryCollection extends ResourceCollection
{
    use IncludeRelatedEntitiesCollectionTrait;
}
