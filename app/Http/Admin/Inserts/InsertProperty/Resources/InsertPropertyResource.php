<?php

declare(strict_types=1);

namespace App\Http\Admin\Inserts\InsertProperty\Resources;

use App\Http\Admin\Inserts\Insert\Resources\InsertCollection;
use App\Http\Admin\Inserts\Insert\Resources\InsertResource;
use App\Http\Admin\Shared\Resources\Traits\IncludeRelatedEntitiesResourceTrait;
use Domain\Inserts\Models\InsertProperty;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin InsertProperty */
final class InsertPropertyResource extends JsonResource
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
            'type' => InsertProperty::TYPE_RESOURCE,
            'attributes' => $this->attributeItems(),
            'relationships' => [
                'insert' => $this->sectionRelationships(
                    'insert.insert-property',
                    InsertResource::class
                )
            ]
        ];
    }

    function relations(): array
    {
        return [
            InsertResource::class => $this->whenLoaded('insert'),
        ];
    }
}
