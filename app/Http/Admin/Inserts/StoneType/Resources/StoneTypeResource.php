<?php

declare(strict_types=1);

namespace App\Http\Admin\Inserts\StoneType\Resources;

use App\Http\Admin\Inserts\Stone\Resources\StoneCollection;
use App\Http\Admin\Shared\Resources\Traits\IncludeRelatedEntitiesResourceTrait;
use Domain\Inserts\Models\StoneType;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin StoneType */
final class StoneTypeResource extends JsonResource
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
            'type' => StoneType::TYPE_RESOURCE,
            'attributes' => $this->attributeItems(),
            'relationships' => [
                'stones' => $this->sectionRelationships(
                    'stone-type.stones',
                    StoneCollection::class
                )
            ]
        ];
    }

    function relations(): array
    {
        return [
            StoneCollection::class => $this->whenLoaded('stones'),
        ];
    }
}
