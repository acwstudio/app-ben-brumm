<?php

namespace App\Http\Admin\Inserts\Stone\Resources;

use App\Http\Admin\Inserts\Insert\Resources\InsertCollection;
use App\Http\Admin\Inserts\StoneType\Resources\StoneTypeResource;
use App\Http\Admin\Jewelleries\Jewellery\Resources\JewelleryCollection;
use App\Http\Admin\Shared\Resources\Traits\IncludeRelatedEntitiesResourceTrait;
use Domain\Inserts\Stone\Models\Stone;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin Stone */
class StoneResource extends JsonResource
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
            'type' => Stone::TYPE_RESOURCE,
            'attributes' => $this->attributeItems(),
            'relationships' => [
                'stoneType' => $this->sectionRelationships(
                    'stones.stone-type',
                    StoneTypeResource::class
                ),
                'inserts' => $this->sectionRelationships(
                    'stone.inserts',
                    InsertCollection::class
                ),
                'jewelleries' => $this->sectionRelationships(
                    'stones.jewelleries',
                    JewelleryCollection::class
                ),
            ]
        ];
    }

    function relations(): array
    {
        return [
            StoneTypeResource::class => $this->whenLoaded('stoneType'),
            InsertCollection::class => $this->whenLoaded('inserts'),
            JewelleryCollection::class => $this->whenLoaded('jewelleries'),
        ];
    }
}
