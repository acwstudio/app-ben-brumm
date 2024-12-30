<?php

declare(strict_types=1);

namespace App\Http\Resources\BraceletPropViews;

use App\Http\Resources\IncludeRelatedEntitiesCollectionTrait;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

final class BraceletPropViewCollection extends ResourceCollection
{
    use IncludeRelatedEntitiesCollectionTrait;
}
