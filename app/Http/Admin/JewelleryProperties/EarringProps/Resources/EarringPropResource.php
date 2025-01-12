<?php

declare(strict_types=1);

namespace App\Http\Admin\JewelleryProperties\EarringProps\Resources;

use App\Http\Admin\Jewelleries\Jewellery\Resources\JewelleryResource;
use App\Http\Admin\JewelleryProperties\Clasps\Resources\ClaspResource;
use App\Http\Admin\Shared\Resources\Traits\IncludeRelatedEntitiesResourceTrait;
use Domain\JewelleryProperties\EarringProp\Models\EarringProp;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin EarringProp */
final class EarringPropResource extends JsonResource
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
            'type' => EarringProp::TYPE_RESOURCE,
            'attributes' => $this->attributeItems(),
            'relationships' => [
                'jewellery' => $this->sectionRelationships(
                    'earring-prop.jewellery',
                    JewelleryResource::class
                ),
                'clasp' => $this->sectionRelationships(
                    'earring-props.clasp',
                    ClaspResource::class
                )
            ]
        ];
    }

    function relations(): array
    {
        return [
            JewelleryResource::class => $this->whenLoaded('jewellery'),
            ClaspResource::class => $this->whenLoaded('clasp'),
        ];
    }
}
