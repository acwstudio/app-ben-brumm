<?php

declare(strict_types=1);

namespace App\Http\Resources\JewelleryCategories;

use App\Http\Resources\IncludeRelatedEntitiesCollectionTrait;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

final class JewelleryCategoryCollection extends ResourceCollection
{
    use IncludeRelatedEntitiesCollectionTrait;
}
