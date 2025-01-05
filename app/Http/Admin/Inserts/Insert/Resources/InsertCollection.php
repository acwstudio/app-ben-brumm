<?php

declare(strict_types=1);

namespace App\Http\Admin\Inserts\Insert\Resources;

use App\Http\Admin\Shared\Resources\Traits\IncludeRelatedEntitiesCollectionTrait;
use Domain\Inserts\Models\Insert;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

/** @mixin Insert */
final class InsertCollection extends ResourceCollection
{
    use IncludeRelatedEntitiesCollectionTrait;
}
