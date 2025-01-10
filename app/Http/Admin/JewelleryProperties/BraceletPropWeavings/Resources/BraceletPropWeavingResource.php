<?php

declare(strict_types=1);

namespace App\Http\Admin\JewelleryProperties\BraceletPropWeavings\Resources;

use App\Http\Admin\JewelleryProperties\BraceletProps\Resources\BraceletPropResource;
use App\Http\Admin\JewelleryProperties\Weavings\Resources\WeavingResource;
use App\Http\Admin\Shared\Resources\Traits\IncludeRelatedEntitiesResourceTrait;
use Domain\JewelleryProperties\BraceletPropWeaving\Models\BraceletPropWeaving;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin BraceletPropWeaving */
final class BraceletPropWeavingResource extends JsonResource
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
            'type' => BraceletPropWeaving::TYPE_RESOURCE,
            'attributes' => $this->attributeItems(),
            'relationships' => [
                'braceletProp' => $this->sectionRelationships(
                    'bracelet-prop-weavings.bracelet-prop',
                    BraceletPropResource::class
                ),
                'weaving' => $this->sectionRelationships(
                    'bracelet-prop-weavings.weaving',
                    WeavingResource::class
                )
            ]
        ];
    }

    function relations(): array
    {
        return [
            BraceletPropResource::class => $this->whenLoaded('braceletProp'),
            WeavingResource::class => $this->whenLoaded('weaving'),
        ];
    }
}
