<?php

declare(strict_types=1);

namespace App\Http\Admin\JewelleryProperties\NecklaceProps\Resources;

use App\Http\Admin\Jewelleries\Jewellery\Resources\JewelleryResource;
use App\Http\Admin\JewelleryProperties\NecklacePropSizes\Resources\NecklacePropSizeCollection;
use App\Http\Admin\JewelleryProperties\NecklaceSizes\Resources\NecklaceSizeCollection;
use App\Http\Admin\Shared\Resources\Traits\IncludeRelatedEntitiesResourceTrait;
use Domain\JewelleryProperties\NecklaceProp\Models\NecklaceProp;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin NecklaceProp */
final class NecklacePropResource extends JsonResource
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
            'type' => NecklaceProp::TYPE_RESOURCE,
            'attributes' => $this->attributeItems(),
            'relationships' => [
                'jewellery' => $this->sectionRelationships(
                    'necklace-prop.jewellery',
                    JewelleryResource::class
                ),
                'necklacePropSizes' => $this->sectionRelationships(
                    'necklace-prop.necklace-prop-sizes',
                    NecklacePropSizeCollection::class
                ),
                'necklaceSizes' => $this->sectionRelationships(
                    'necklace-props.necklace-sizes',
                    NecklaceSizeCollection::class
                )
            ]
        ];
    }

    function relations(): array
    {
        return [
            JewelleryResource::class => $this->whenLoaded('jewellery'),
            NecklacePropSizeCollection::class => $this->whenLoaded('necklacePropSizes'),
            NecklaceSizeCollection::class => $this->whenLoaded('necklaceSizes'),
        ];
    }
}
