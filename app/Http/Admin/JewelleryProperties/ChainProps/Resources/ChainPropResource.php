<?php

declare(strict_types=1);

namespace App\Http\Admin\JewelleryProperties\ChainProps\Resources;

use Domain\JewelleryProperties\ChainProp\Models\ChainProp;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin ChainProp */
final class ChainPropResource extends JsonResource
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
