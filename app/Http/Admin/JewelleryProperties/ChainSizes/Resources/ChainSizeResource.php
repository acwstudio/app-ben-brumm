<?php

declare(strict_types=1);

namespace App\Http\Admin\JewelleryProperties\ChainSizes\Resources;

use App\Http\Admin\JewelleryProperties\ChainProps\Resources\ChainPropCollection;
use App\Http\Admin\JewelleryProperties\ChainPropSizes\Resources\ChainPropSizeCollection;
use App\Http\Admin\Shared\Resources\Traits\IncludeRelatedEntitiesResourceTrait;
use Domain\JewelleryProperties\ChainSize\Models\ChainSize;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin ChainSize */
final class ChainSizeResource extends JsonResource
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
            'type' => ChainSize::TYPE_RESOURCE,
            'attributes' => $this->attributeItems(),
            'relationships' => [
                'braceletProps' => $this->sectionRelationships(
                    'chain-props.chain-sizes',
                    ChainPropCollection::class
                ),
                'braceletPropSizes' => $this->sectionRelationships(
                    'chain-prop-sizes.chain-size',
                    ChainPropSizeCollection::class
                )
            ]
        ];
    }

    function relations(): array
    {
        return [
            ChainPropCollection::class => $this->whenLoaded('chainProps'),
            ChainPropSizeCollection::class => $this->whenLoaded('chainPropsSizes'),
        ];
    }
}
