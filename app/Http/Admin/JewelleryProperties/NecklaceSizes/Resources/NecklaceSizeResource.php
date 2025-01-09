<?php

namespace App\Http\Admin\JewelleryProperties\NecklaceSizes\Resources;

use App\Http\Admin\JewelleryProperties\NecklaceProps\Resources\NecklacePropCollection;
use App\Http\Admin\JewelleryProperties\NecklacePropSizes\Resources\NecklacePropSizeCollection;
use App\Http\Admin\Shared\Resources\Traits\IncludeRelatedEntitiesResourceTrait;
use Domain\JewelleryProperties\NecklaceSize\Models\NecklaceSize;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin NecklaceSize */
class NecklaceSizeResource extends JsonResource
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
            'type' => NecklaceSize::TYPE_RESOURCE,
            'attributes' => $this->attributeItems(),
            'relationships' => [
                'necklaceProps' => $this->sectionRelationships(
                    'necklace-sizes.necklace-props',
                    NecklacePropCollection::class
                ),
                'necklacePropSizes' => $this->sectionRelationships(
                    'necklace-size.necklace-prop-sizes',
                    NecklacePropSizeCollection::class
                )
            ]
        ];
    }

    function relations(): array
    {
        return [
            NecklacePropCollection::class => $this->whenLoaded('necklaceProps'),
            NecklacePropSizeCollection::class => $this->whenLoaded('necklacePropSizes'),
        ];
    }
}
