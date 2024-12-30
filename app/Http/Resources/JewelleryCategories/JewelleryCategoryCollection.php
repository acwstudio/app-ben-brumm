<?php

namespace App\Http\Resources\JewelleryCategories;

use App\Http\Resources\IncludeRelatedEntitiesCollectionTrait;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class JewelleryCategoryCollection extends ResourceCollection
{
    use IncludeRelatedEntitiesCollectionTrait;
}
