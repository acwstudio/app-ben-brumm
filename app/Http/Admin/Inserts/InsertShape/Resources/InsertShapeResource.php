<?php

declare(strict_types=1);

namespace App\Http\Admin\Inserts\InsertShape\Resources;

use App\Http\Admin\Inserts\Insert\Resources\InsertCollection;
use App\Http\Admin\Shared\Resources\Traits\IncludeRelatedEntitiesResourceTrait;
use Domain\Inserts\InsertShape\Models\InsertShape;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin InsertShape */
final class InsertShapeResource extends JsonResource
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
            'type' => InsertShape::TYPE_RESOURCE,
            'attributes' => $this->attributeItems(),
            'relationships' => [
                'inserts' => $this->sectionRelationships(
                    'inserts.insert-shape',
                    InsertCollection::class
                )
            ]
        ];
    }

    function relations(): array
    {
        return [
            InsertCollection::class => $this->whenLoaded('inserts')
        ];
    }
}
