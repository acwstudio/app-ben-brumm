<?php

declare(strict_types=1);

namespace App\Http\Admin\Inserts\Insert\Resources;

use App\Http\Admin\Inserts\InsertColour\Resources\InsertColourResource;
use App\Http\Admin\Inserts\InsertProperty\Resources\InsertPropertyResource;
use App\Http\Admin\Inserts\InsertShape\Resources\InsertShapeResource;
use App\Http\Admin\Inserts\Stone\Resources\StoneResource;
use App\Http\Admin\Jewelleries\Jewellery\Resources\JewelleryResource;
use App\Http\Admin\Shared\Resources\Traits\IncludeRelatedEntitiesResourceTrait;
use Domain\Inserts\Insert\Models\Insert;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin Insert */
final class InsertResource extends JsonResource
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
            'type' => Insert::TYPE_RESOURCE,
            'attributes' => $this->attributeItems(),
            'relationships' => [
                'jewellery' => $this->sectionRelationships(
                    'inserts.jewellery',
                    JewelleryResource::class
                ),
                'stone' => $this->sectionRelationships(
                    'inserts.stone',
                    StoneResource::class
                ),
                'insert-shape' => $this->sectionRelationships(
                    'inserts.insert-shape',
                    InsertShapeResource::class
                ),
                'insert-colour' => $this->sectionRelationships(
                    'inserts.insert-colour',
                    InsertColourResource::class
                ),
                'insert-property' => $this->sectionRelationships(
                    'insert.insert-property',
                    InsertPropertyResource::class
                ),
            ]
        ];
    }

    function relations(): array
    {
        return [
            JewelleryResource::class => $this->whenLoaded('jewellery'),
            StoneResource::class => $this->whenLoaded('stone'),
            InsertShapeResource::class => $this->whenLoaded('insertShape'),
            InsertColourResource::class => $this->whenLoaded('insertColour'),
            InsertPropertyResource::class => $this->whenLoaded('insertProperty'),
        ];
    }
}
