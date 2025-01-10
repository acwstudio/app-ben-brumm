<?php

declare(strict_types=1);

namespace App\Http\Admin\JewelleryProperties\Clasps\Resources;

use App\Http\Admin\JewelleryProperties\EarringProps\Resources\EarringPropCollection;
use App\Http\Admin\JewelleryProperties\EarringProps\Resources\EarringPropResource;
use App\Http\Admin\Shared\Resources\Traits\IncludeRelatedEntitiesResourceTrait;
use Domain\JewelleryProperties\Clasp\Models\Clasp;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin Clasp */
final class ClaspResource extends JsonResource
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
            'type' => Clasp::TYPE_RESOURCE,
            'attributes' => $this->attributeItems(),
            'relationships' => [
                'earringProps' => $this->sectionRelationships(
                    'clasp.earring-props',
                    EarringPropCollection::class
                )
            ]
        ];
    }

    function relations(): array
    {
        return [
            EarringPropCollection::class => $this->whenLoaded('earringProps')
        ];
    }
}
