<?php

declare(strict_types=1);

namespace App\Http\Admin\JewelleryProperties\BraceletProps\Resources;

use App\Http\Admin\Jewelleries\Jewellery\Resources\JewelleryResource;
use App\Http\Admin\JewelleryProperties\BraceletPropSizes\Resources\BraceletPropSizeCollection;
use App\Http\Admin\JewelleryProperties\BraceletPropWeavings\Resources\BraceletPropWeavingCollection;
use App\Http\Admin\JewelleryProperties\BraceletSizes\Resources\BraceletSizeCollection;
use App\Http\Admin\JewelleryProperties\Weavings\Resources\WeavingCollection;
use App\Http\Admin\Shared\Resources\Traits\IncludeRelatedEntitiesResourceTrait;
use Domain\Jewelleries\Jewellery\Models\Jewellery;
use Domain\JewelleryProperties\BraceletProp\Models\BraceletProp;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin BraceletProp */
final class BraceletPropResource extends JsonResource
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
            'type' => BraceletProp::TYPE_RESOURCE,
            'attributes' => $this->attributeItems(),
            'relationships' => [
                'braceletSizes' => $this->sectionRelationships(
                    'bracelet-props.bracelet-sizes',
                    BraceletSizeCollection::class
                ),
                'braceletPropSizes' => $this->sectionRelationships(
                    'bracelet-prop.bracelet-prop-sizes',
                    BraceletPropSizeCollection::class
                ),
                'braceletPropWeavings' => $this->sectionRelationships(
                    'bracelet-prop.bracelet-prop-weavings',
                    BraceletPropWeavingCollection::class
                ),
                'weavings' => $this->sectionRelationships(
                    'bracelet-props.weavings',
                    WeavingCollection::class
                ),
                'jewellery' => $this->sectionRelationships(
                    'bracelet-prop.jewellery',
                    JewelleryResource::class
                )
            ]
        ];
    }

    function relations(): array
    {
        return [
            BraceletSizeCollection::class => $this->whenLoaded('braceletSizes'),
            BraceletPropSizeCollection::class => $this->whenLoaded('braceletPropSizes'),
            BraceletPropWeavingCollection::class => $this->whenLoaded('braceletPropWeavings'),
            WeavingCollection::class => $this->whenLoaded('weavings'),
            JewelleryResource::class => $this->whenLoaded('jewellery'),
        ];
    }
}
