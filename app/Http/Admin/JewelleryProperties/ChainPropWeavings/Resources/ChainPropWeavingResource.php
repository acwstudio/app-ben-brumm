<?php

declare(strict_types=1);

namespace App\Http\Admin\JewelleryProperties\ChainPropWeavings\Resources;

use Domain\JewelleryProperties\ChainPropWeaving\Models\ChainPropWeaving;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin ChainPropWeaving */
final class ChainPropWeavingResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return parent::toArray($request);
    }
}
