<?php

declare(strict_types=1);

namespace App\Http\Admin\JewelleryProperties\ChainPropWeavings\Resources;

use App\Http\Admin\JewelleryProperties\ChainProps\Resources\ChainPropResource;
use App\Http\Admin\JewelleryProperties\Weavings\Resources\WeavingResource;
use App\Http\Admin\Shared\Resources\Traits\IncludeRelatedEntitiesResourceTrait;
use Domain\JewelleryProperties\ChainPropWeaving\Models\ChainPropWeaving;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin ChainPropWeaving */
final class ChainPropWeavingResource extends JsonResource
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
            'type' => ChainPropWeaving::TYPE_RESOURCE,
            'attributes' => $this->attributeItems(),
            'relationships' => [
                'chainProp' => $this->sectionRelationships(
                    'chain-prop-weavings.chain-prop',
                    ChainPropResource::class
                ),
                'weaving' => $this->sectionRelationships(
                    'chain-prop-weavings.weaving',
                    WeavingResource::class
                )
            ]
        ];
    }

    function relations(): array
    {
        return [
            ChainPropResource::class => $this->whenLoaded('chainProp'),
            WeavingResource::class => $this->whenLoaded('weaving'),
        ];
    }
}
