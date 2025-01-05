<?php

namespace App\Http\Admin\Inserts\Stone\Resources;

use App\Http\Admin\Inserts\StoneType\Resources\StoneTypeResource;
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
                    'stone-type.stones',
                    StoneTypeResource::class
                )
            ]
        ];
    }

    function relations(): array
    {
        return [
            StoneTypeResource::class => $this->whenLoaded('stoneType'),
        ];
    }
}
