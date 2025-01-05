<?php

declare(strict_types=1);

namespace App\Http\Admin\Jewelleries\Jewellery\Resources;

use App\Http\Admin\Shared\Resources\Traits\IncludeRelatedEntitiesResourceTrait;
use App\Http\Resources\BraceletPropViews\BraceletPropViewResource;
use App\Http\Resources\JewelleryCategories\JewelleryCategoryResource;
use Domain\Jewelleries\Jewellery\Models\Jewellery;
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
                    'jewellery-category.jewelleries',
                    JewelleryCategoryResource::class
                ),
                'braceletPropView' => $this->sectionRelationships(
                    'bracelet-prop-view.jewellery',
                    BraceletPropViewResource::class
                ),
            ]
        ];
    }

    function relations(): array
    {
        return [
            JewelleryCategoryResource::class => $this->whenLoaded('jewelleryCategory'),
            BraceletPropViewResource::class  => $this->whenLoaded('braceletPropView'),
        ];
    }
}
