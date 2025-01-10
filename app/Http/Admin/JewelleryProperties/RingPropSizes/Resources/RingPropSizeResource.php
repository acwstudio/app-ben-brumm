<?php

declare(strict_types=1);

namespace App\Http\Admin\JewelleryProperties\RingPropSizes\Resources;

use App\Http\Admin\JewelleryProperties\RingProps\Resources\RingPropResource;
use App\Http\Admin\JewelleryProperties\RingSizes\Resources\RingSizeResource;
use App\Http\Admin\Shared\Resources\Traits\IncludeRelatedEntitiesResourceTrait;
use Domain\JewelleryProperties\RingPropSize\Models\RingPropSize;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin RingPropSize */
final class RingPropSizeResource extends JsonResource
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
            'type' => RingPropSize::TYPE_RESOURCE,
            'attributes' => $this->attributeItems(),
            'relationships' => [
                'ringProp' => $this->sectionRelationships(
                    'ring-prop-sizes.ring-prop',
                    RingPropResource::class
                ),
                'ringSize' => $this->sectionRelationships(
                    'ring-prop-sizes.ring-size',
                    RingSizeResource::class
                )
            ]
        ];
    }

    function relations(): array
    {
        return [
            RingPropResource::class => $this->whenLoaded('ringProp'),
            RingSizeResource::class => $this->whenLoaded('ringSize'),
        ];
    }
}
