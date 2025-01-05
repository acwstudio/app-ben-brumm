<?php

declare(strict_types=1);

namespace App\Http\Admin\Inserts\InsertColour\Resources;

use App\Http\Admin\Inserts\Insert\Resources\InsertCollection;
use App\Http\Admin\Shared\Resources\Traits\IncludeRelatedEntitiesResourceTrait;
use Domain\Inserts\InsertColour\Models\InsertColour;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin InsertColour */
final class InsertColourResource extends JsonResource
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
            'type' => InsertColour::TYPE_RESOURCE,
            'attributes' => $this->attributeItems(),
            'relationships' => [
                'inserts' => $this->sectionRelationships(
                    'inserts.insert-colour',
                    InsertCollection::class
                )
            ]
        ];
    }

    function relations(): array
    {
        return [
            InsertCollection::class => $this->whenLoaded('inserts'),
        ];
    }
}
