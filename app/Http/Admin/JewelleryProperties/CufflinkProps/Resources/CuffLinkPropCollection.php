<?php

declare(strict_types=1);

namespace App\Http\Admin\JewelleryProperties\CufflinkProps\Resources;

use App\Http\Admin\Shared\Resources\Traits\IncludeRelatedEntitiesCollectionTrait;
use Illuminate\Http\Resources\Json\ResourceCollection;

final class CuffLinkPropCollection extends ResourceCollection
{
    use IncludeRelatedEntitiesCollectionTrait;
}
