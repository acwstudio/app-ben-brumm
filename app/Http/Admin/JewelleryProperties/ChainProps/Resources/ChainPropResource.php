<?php

declare(strict_types=1);

namespace App\Http\Admin\JewelleryProperties\ChainProps\Resources;

use App\Http\Admin\Jewelleries\Jewellery\Resources\JewelleryResource;
use App\Http\Admin\JewelleryProperties\ChainPropSizes\Resources\ChainPropSizeCollection;
use App\Http\Admin\JewelleryProperties\ChainPropWeavings\Resources\ChainPropWeavingCollection;
use App\Http\Admin\JewelleryProperties\ChainSizes\Resources\ChainSizeCollection;
use App\Http\Admin\JewelleryProperties\Weavings\Resources\WeavingCollection;
use App\Http\Admin\Shared\Resources\Traits\IncludeRelatedEntitiesResourceTrait;
use Domain\JewelleryProperties\ChainProp\Models\ChainProp;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin ChainProp */
final class ChainPropResource extends JsonResource
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
            'type' => ChainProp::TYPE_RESOURCE,
            'attributes' => $this->attributeItems(),
            'relationships' => [
                'chainSizes' => $this->sectionRelationships(
                    'chain-props.chain-sizes',
                    ChainSizeCollection::class
                ),
                'chainPropSizes' => $this->sectionRelationships(
                    'chain-prop.chain-prop-sizes',
                    ChainPropSizeCollection::class
                ),
                'chainPropWeavings' => $this->sectionRelationships(
                    'chain-prop.chain-prop-weavings',
                    ChainPropWeavingCollection::class
                ),
                'weavings' => $this->sectionRelationships(
                    'chain-props.weavings',
                    WeavingCollection::class
                ),
                'jewellery' => $this->sectionRelationships(
                    'chain-prop.jewellery',
                    JewelleryResource::class
                )
            ]
        ];
    }

    function relations(): array
    {
        return [
            ChainSizeCollection::class => $this->whenLoaded('chainSizes'),
            ChainPropSizeCollection::class => $this->whenLoaded('chainPropSizes'),
            ChainPropWeavingCollection::class => $this->whenLoaded('chainPropWeavings'),
            WeavingCollection::class => $this->whenLoaded('weavings'),
            JewelleryResource::class => $this->whenLoaded('jewellery'),
        ];
    }
}
