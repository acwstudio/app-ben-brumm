<?php

declare(strict_types=1);

namespace App\Http\Admin\JewelleryProperties\Clasps\Resources;

use App\Http\Admin\Shared\Resources\Traits\IncludeRelatedEntitiesCollectionTrait;
use Illuminate\Http\Resources\Json\ResourceCollection;

final class ClaspCollection extends ResourceCollection
{
    use IncludeRelatedEntitiesCollectionTrait;
}
