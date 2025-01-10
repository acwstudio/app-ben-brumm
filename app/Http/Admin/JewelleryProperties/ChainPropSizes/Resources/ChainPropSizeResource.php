<?php

declare(strict_types=1);

namespace App\Http\Admin\JewelleryProperties\ChainPropSizes\Resources;

use App\Http\Admin\JewelleryProperties\ChainProps\Resources\ChainPropResource;
use App\Http\Admin\JewelleryProperties\ChainSizes\Resources\ChainSizeResource;
use App\Http\Admin\Shared\Resources\Traits\IncludeRelatedEntitiesResourceTrait;
use Domain\JewelleryProperties\ChainPropSize\Models\ChainPropSize;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin ChainPropSize */
final class ChainPropSizeResource extends JsonResource
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
            'type' => ChainPropSize::TYPE_RESOURCE,
            'attributes' => $this->attributeItems(),
            'relationships' => [
                'chainProp' => $this->sectionRelationships(
                    'chain-prop-sizes.chain-prop',
                    ChainPropResource::class
                ),
                'chainSize' => $this->sectionRelationships(
                    'chain-prop-sizes.chain-size',
                    ChainSizeResource::class
                )
            ]
        ];
    }

    function relations(): array
    {
        return [
            ChainPropResource::class => $this->whenLoaded('chainProp'),
            ChainSizeResource::class => $this->whenLoaded('chainSize'),
        ];
    }
}
