<?php

declare(strict_types=1);

namespace App\Http\Admin\JewelleryProperties\RingProps\Resources;

use App\Http\Admin\Jewelleries\Jewellery\Resources\JewelleryResource;
use App\Http\Admin\JewelleryProperties\RingPropSizes\Resources\RingPropSizeCollection;
use App\Http\Admin\JewelleryProperties\RingSizes\Resources\RingSizeCollection;
use App\Http\Admin\Shared\Resources\Traits\IncludeRelatedEntitiesResourceTrait;
use Domain\Jewelleries\Jewellery\Models\Jewellery;
use Domain\JewelleryProperties\RingProp\Models\RingProp;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin RingProp */
final class RingPropResource extends JsonResource
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
            'type' => RingProp::TYPE_RESOURCE,
            'attributes' => $this->attributeItems(),
            'relationships' => [
                'jewellery' => $this->sectionRelationships(
                    'ring-prop.jewellery',
                    JewelleryResource::class
                ),
                'ringPropSizes' => $this->sectionRelationships(
                    'ring-prop.ring-prop-sizes',
                    RingPropSizeCollection::class
                ),
                'ringSizes' => $this->sectionRelationships(
                    'ring-props.ring-sizes',
                    RingSizeCollection::class
                )
            ]
        ];
    }

    function relations(): array
    {
        return [
            JewelleryResource::class => $this->whenLoaded('jewellery'),
            RingPropSizeCollection::class => $this->whenLoaded('ringPropSizes'),
            RingSizeCollection::class => $this->whenLoaded('ringSizes'),
        ];
    }
}
