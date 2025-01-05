<?php

declare(strict_types=1);

namespace App\Http\Admin\JewelleryProperties\Weavings\Resources;

use App\Http\Admin\JewelleryProperties\BraceletProps\Resources\BraceletPropCollection;
use App\Http\Admin\JewelleryProperties\BraceletPropWeavings\Resources\BraceletPropWeavingCollection;
use App\Http\Admin\JewelleryProperties\ChainProps\Resources\ChainPropCollection;
use App\Http\Admin\JewelleryProperties\ChainPropWeavings\Resources\ChainPropWeavingCollection;
use App\Http\Admin\Shared\Resources\Traits\IncludeRelatedEntitiesResourceTrait;
use Domain\JewelleryProperties\Weaving\Models\Weaving;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin Weaving */
final class WeavingResource extends JsonResource
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
            'type' => Weaving::TYPE_RESOURCE,
            'attributes' => $this->attributeItems(),
            'relationships' => [
                'braceletProps' => $this->sectionRelationships(
                    'bracelet-props.weaving',
                    BraceletPropCollection::class
                ),
                'braceletPropWeavings' => $this->sectionRelationships(
                    'bracelet-prop-weavings.weaving',
                    BraceletPropWeavingCollection::class
                ),
                'chainPropWeavings' => $this->sectionRelationships(
                    'chain-prop-weavings.weaving',
                    ChainPropWeavingCollection::class
                ),
                'chainProps' => $this->sectionRelationships(
                    'chain-props.weaving',
                    ChainPropCollection::class
                ),
            ]
        ];
    }

    function relations(): array
    {
        return [
            BraceletPropCollection::class => $this->whenLoaded('braceletProps'),
            BraceletPropWeavingCollection::class => $this->whenLoaded('braceletPropWeavings'),
            ChainPropWeavingCollection::class => $this->whenLoaded('chainPropWeavings'),
            ChainPropCollection::class => $this->whenLoaded('chainProps'),
        ];
    }
}
