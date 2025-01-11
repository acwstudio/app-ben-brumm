<?php

declare(strict_types=1);

namespace App\Http\Admin\JewelleryProperties\BroochProps\Resources;

use App\Http\Admin\Jewelleries\Jewellery\Resources\JewelleryResource;
use App\Http\Admin\JewelleryProperties\BraceletProps\Resources\BraceletPropCollection;
use App\Http\Admin\JewelleryProperties\ChainProps\Resources\ChainPropCollection;
use App\Http\Admin\JewelleryProperties\ChainPropWeavings\Resources\ChainPropWeavingCollection;
use App\Http\Admin\Shared\Resources\Traits\IncludeRelatedEntitiesResourceTrait;
use Domain\JewelleryProperties\BroochProp\Models\BroochProp;
use Domain\JewelleryProperties\Weaving\Models\Weaving;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin BroochProp */
final class BroochPropResource extends JsonResource
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
            'type' => BroochProp::TYPE_RESOURCE,
            'attributes' => $this->attributeItems(),
            'relationships' => [
                'jewellery' => $this->sectionRelationships(
                    'brooch-prop.jewellery',
                    JewelleryResource::class
                )
            ]
        ];
    }

    function relations(): array
    {
        return [
            JewelleryResource::class => $this->whenLoaded('jewellery'),
        ];
    }
}
