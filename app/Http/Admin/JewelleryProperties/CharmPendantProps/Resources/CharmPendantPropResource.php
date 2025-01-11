<?php

declare(strict_types=1);

namespace App\Http\Admin\JewelleryProperties\CharmPendantProps\Resources;

use App\Http\Admin\Jewelleries\Jewellery\Resources\JewelleryResource;
use App\Http\Admin\Shared\Resources\Traits\IncludeRelatedEntitiesResourceTrait;
use Domain\JewelleryProperties\CharmPendantProp\Models\CharmPendantProp;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin CharmPendantProp */
final class CharmPendantPropResource extends JsonResource
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
            'type' => CharmPendantProp::TYPE_RESOURCE,
            'attributes' => $this->attributeItems(),
            'relationships' => [
                'jewellery' => $this->sectionRelationships(
                    'charm-pendant-prop.jewellery',
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
