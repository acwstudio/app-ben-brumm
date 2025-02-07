<?php

declare(strict_types=1);

namespace App\Http\Admin\Inserts\InsertProperty\Resources;

use App\Http\Admin\Shared\Resources\Traits\IncludeRelatedEntitiesCollectionTrait;
use Illuminate\Http\Resources\Json\ResourceCollection;

final class InsertPropertyCollection extends ResourceCollection
{
    use IncludeRelatedEntitiesCollectionTrait;
}
