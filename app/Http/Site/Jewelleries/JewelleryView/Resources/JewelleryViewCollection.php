<?php

declare(strict_types=1);

namespace App\Http\Site\Jewelleries\JewelleryView\Resources;

use App\Http\Admin\Shared\Resources\Traits\IncludeRelatedEntitiesCollectionTrait;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

final class JewelleryViewCollection extends ResourceCollection
{
    use IncludeRelatedEntitiesCollectionTrait;
}
