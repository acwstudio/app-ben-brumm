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
                    'weavings.bracelet-props',
                    BraceletPropCollection::class
                ),
                'braceletPropWeavings' => $this->sectionRelationships(
                    'weaving.bracelet-prop-weavings',
                    BraceletPropWeavingCollection::class
                ),
                'chainPropWeavings' => $this->sectionRelationships(
                    'weaving.chain-prop-weavings',
                    ChainPropWeavingCollection::class
                ),
                'chainProps' => $this->sectionRelationships(
                    'weavings.chain-props',
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
