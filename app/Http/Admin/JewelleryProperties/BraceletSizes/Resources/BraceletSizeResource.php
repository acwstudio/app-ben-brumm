<?php

declare(strict_types=1);

namespace App\Http\Admin\JewelleryProperties\BraceletSizes\Resources;

use App\Http\Admin\JewelleryProperties\BraceletProps\Resources\BraceletPropCollection;
use App\Http\Admin\JewelleryProperties\BraceletPropSizes\Resources\BraceletPropSizeCollection;
use App\Http\Admin\Shared\Resources\Traits\IncludeRelatedEntitiesCollectionTrait;
use App\Http\Admin\Shared\Resources\Traits\IncludeRelatedEntitiesResourceTrait;
use Domain\JewelleryProperties\BraceletSize\Models\BraceletSize;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin BraceletSize */
final class BraceletSizeResource extends JsonResource
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
            'type' => BraceletSize::TYPE_RESOURCE,
            'attributes' => $this->attributeItems(),
            'relationships' => [
                'braceletProps' => $this->sectionRelationships(
                    'bracelet-sizes.bracelet-props',
                    BraceletPropCollection::class
                ),
                'braceletPropSizes' => $this->sectionRelationships(
                    'bracelet-size.bracelet-prop-sizes',
                    BraceletPropSizeCollection::class
                )
            ]
        ];
    }

    function relations(): array
    {
        return [
            BraceletPropCollection::class => $this->whenLoaded('braceletProps'),
            BraceletPropSizeCollection::class => $this->whenLoaded('braceletPropsSizes'),
        ];
    }
}
