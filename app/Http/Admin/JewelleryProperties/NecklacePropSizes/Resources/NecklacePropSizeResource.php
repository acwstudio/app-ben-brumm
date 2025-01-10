<?php

declare(strict_types=1);

namespace App\Http\Admin\JewelleryProperties\NecklacePropSizes\Resources;

use App\Http\Admin\JewelleryProperties\NecklaceProps\Resources\NecklacePropResource;
use App\Http\Admin\JewelleryProperties\NecklaceSizes\Resources\NecklaceSizeResource;
use App\Http\Admin\Shared\Resources\Traits\IncludeRelatedEntitiesResourceTrait;
use Domain\JewelleryProperties\NecklacePropSize\Models\NecklacePropSize;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin NecklacePropSize */
final class NecklacePropSizeResource extends JsonResource
{
    use IncludeRelatedEntitiesResourceTrait;

    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'type' => NecklacePropSize::TYPE_RESOURCE,
            'attributes' => $this->attributeItems(),
            'relationships' => [
                'necklaceProp' => $this->sectionRelationships(
                    'necklace-prop-sizes.necklace-prop',
                    NecklacePropResource::class
                ),
                'necklaceSize' => $this->sectionRelationships(
                    'necklace-prop-sizes.necklace-size',
                    NecklaceSizeResource::class
                )
            ]
        ];
    }

    function relations(): array
    {
        return [
            NecklacePropResource::class => $this->whenLoaded('necklaceProp'),
            NecklaceSizeResource::class => $this->whenLoaded('necklaceSize'),
        ];
    }
}
