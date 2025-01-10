<?php

declare(strict_types=1);

namespace App\Http\Admin\JewelleryProperties\BraceletPropSizes\Resources;

use App\Http\Admin\JewelleryProperties\BraceletProps\Resources\BraceletPropResource;
use App\Http\Admin\JewelleryProperties\BraceletSizes\Resources\BraceletSizeResource;
use App\Http\Admin\Shared\Resources\Traits\IncludeRelatedEntitiesResourceTrait;
use Domain\JewelleryProperties\BraceletPropSize\Models\BraceletPropSize;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin BraceletPropSize */
final class BraceletPropSizeResource extends JsonResource
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
            'type' => BraceletPropSize::TYPE_RESOURCE,
            'attributes' => $this->attributeItems(),
            'relationships' => [
                'braceletProp' => $this->sectionRelationships(
                    'bracelet-prop-sizes.bracelet-prop',
                    BraceletPropResource::class
                ),
                'braceletSize' => $this->sectionRelationships(
                    'bracelet-prop-sizes.bracelet-size',
                    BraceletSizeResource::class
                )
            ]
        ];
    }

    function relations(): array
    {
        return [
            BraceletPropResource::class => $this->whenLoaded('braceletProp'),
            BraceletSizeResource::class => $this->whenLoaded('braceletSize'),
        ];
    }
}
