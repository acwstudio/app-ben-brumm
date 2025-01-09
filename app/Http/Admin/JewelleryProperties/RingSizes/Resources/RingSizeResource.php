<?php

declare(strict_types=1);

namespace App\Http\Admin\JewelleryProperties\RingSizes\Resources;

use App\Http\Admin\JewelleryProperties\RingProps\Resources\RingPropCollection;
use App\Http\Admin\JewelleryProperties\RingPropSizes\Resources\RingPropSizeCollection;
use App\Http\Admin\Shared\Resources\Traits\IncludeRelatedEntitiesResourceTrait;
use Domain\JewelleryProperties\RingSize\Models\RingSize;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin RingSize */
final class RingSizeResource extends JsonResource
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
            'type' => RingSize::TYPE_RESOURCE,
            'attributes' => $this->attributeItems(),
            'relationships' => [
                'ringProps' => $this->sectionRelationships(
                    'ring-props.ring-sizes',
                    RingPropCollection::class
                ),
                'ringPropSizes' => $this->sectionRelationships(
                    'ring-prop-sizes.ring-size',
                    RingPropSizeCollection::class
                )
            ]
        ];
    }

    function relations(): array
    {
        return [
            RingPropCollection::class => $this->whenLoaded('ringProps'),
            RingPropSizeCollection::class => $this->whenLoaded('ringPropsSizes'),
        ];
    }
}
