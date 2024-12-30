<?php

declare(strict_types=1);

namespace App\Http\Resources\Jewelleries;

use App\Http\Resources\IncludeRelatedEntitiesResourceTrait;
use App\Http\Resources\JewelleryCategories\JewelleryCategoryResource;
use Domain\Jewelleries\Models\Jewellery;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin Jewellery */
final class JewelleryResource extends JsonResource
{
    use IncludeRelatedEntitiesResourceTrait;

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|Arrayable|\JsonSerializable
     */
    public function toArray(Request $request): array|\JsonSerializable|Arrayable
    {
        return [
            'id' => $this->id,
            'type' => Jewellery::TYPE_RESOURCE,
            'attributes' => $this->attributeItems(),
            'relationships' => [
                'jewelleryCategory' => $this->sectionRelationships(
                    'jewelleries.jewellery-category',
                    JewelleryCategoryResource::class
                )
            ]
        ];
    }

    function relations(): array
    {
        return [
            JewelleryCategoryResource::class => $this->whenLoaded('jewelleryCategory'),
        ];
    }
}
