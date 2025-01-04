<?php

namespace App\Http\Admin\Inserts\Stone\Resources;

use App\Http\Admin\Shared\Resources\Traits\IncludeRelatedEntitiesCollectionTrait;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class StoneCollection extends ResourceCollection
{
    use IncludeRelatedEntitiesCollectionTrait;
}
