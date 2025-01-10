<?php

declare(strict_types=1);

namespace App\Http\Admin\JewelleryProperties\ChainPropWeavings\Resources;

use App\Http\Admin\Shared\Resources\Traits\IncludeRelatedEntitiesCollectionTrait;
use Domain\JewelleryProperties\ChainPropWeaving\Models\ChainPropWeaving;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

/** @mixin ChainPropWeaving */
final class ChainPropWeavingCollection extends ResourceCollection
{
    use IncludeRelatedEntitiesCollectionTrait;
}
