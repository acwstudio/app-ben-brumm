<?php

namespace App\Http\Admin\Inserts\InsertProperty\Resources;

use App\Http\Admin\Shared\Resources\Traits\IncludeRelatedEntitiesCollectionTrait;
use Illuminate\Http\Resources\Json\ResourceCollection;

class InsertPropertyCollection extends ResourceCollection
{
    use IncludeRelatedEntitiesCollectionTrait;
}
