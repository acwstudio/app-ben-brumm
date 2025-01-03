<?php

declare(strict_types=1);

namespace App\Http\Resources\JewelleryCategories;

use App\Http\Resources\IncludeRelatedEntitiesResourceTrait;
use App\Http\Resources\Jewelleries\JewelleryCollection;
use App\Http\Resources\Jewelleries\JewelleryResource;
use Domain\Jewelleries\Models\JewelleryCategory;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin JewelleryCategory */
final class JewelleryCategoryResource extends JsonResource
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
            'type' => JewelleryCategory::TYPE_RESOURCE,
            'attributes' => $this->attributeItems(),
            'relationships' => [
                'jewelleries' => $this->sectionRelationships(
                    'jewelleries.jewellery-category',
                    JewelleryCollection::class
                )
            ]
        ];
    }

    function relations(): array
    {
        return [
            JewelleryCollection::class => $this->whenLoaded('jewelleries'),
        ];
    }
}
