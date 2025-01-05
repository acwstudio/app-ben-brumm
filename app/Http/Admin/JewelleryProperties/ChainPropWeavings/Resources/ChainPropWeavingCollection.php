<?php

declare(strict_types=1);

namespace App\Http\Admin\JewelleryProperties\ChainPropWeavings\Resources;

use Domain\JewelleryProperties\ChainPropWeaving\Models\ChainPropWeaving;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

/** @mixin ChainPropWeaving */
final class ChainPropWeavingCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        return parent::toArray($request);
    }
}
