<?php

declare(strict_types=1);

namespace App\Http\Admin\Inserts\InsertColour\Resources;

use App\Http\Admin\Shared\Resources\Traits\IncludeRelatedEntitiesCollectionTrait;
use Illuminate\Http\Resources\Json\ResourceCollection;

final class InsertColourCollection extends ResourceCollection
{
    use IncludeRelatedEntitiesCollectionTrait;
}
