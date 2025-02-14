<?php

declare(strict_types=1);

namespace App\Http\Site\Jewelleries\JewelleryView\Resources;

use App\Http\Admin\PreciousMetals\PrcsMetalSample\Resources\PrcsMetalSampleResource;
use App\Http\Admin\Shared\Resources\Traits\IncludeRelatedEntitiesResourceTrait;
use Domain\Views\JewelleryViews\Models\JewelleryView;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

final class JewelleryViewResource extends JsonResource
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
            'type' => JewelleryView::TYPE_RESOURCE,
            'attributes' => $this->attributeItems(),
            'relationships' => [
                'prcs-metal-sample' => $this->sectionRelationships(
                    'jewellery-views.prcs-metal-sample',
                    PrcsMetalSampleResource::class
                ),
//                'stone' => $this->sectionRelationships(
//                    'inserts.stone',
//                    StoneResource::class
//                ),
//                'insert-shape' => $this->sectionRelationships(
//                    'inserts.insert-shape',
//                    InsertShapeResource::class
//                ),
//                'insert-colour' => $this->sectionRelationships(
//                    'inserts.insert-colour',
//                    InsertColourResource::class
//                ),
//                'insert-property' => $this->sectionRelationships(
//                    'insert.insert-property',
//                    InsertPropertyResource::class
//                ),
            ]
        ];
    }

    function relations(): array
    {
        return [
            PrcsMetalSampleResource::class => $this->whenLoaded('prcsMetalSample'),
//            StoneResource::class => $this->whenLoaded('stone'),
//            InsertShapeResource::class => $this->whenLoaded('insertShape'),
//            InsertColourResource::class => $this->whenLoaded('insertColour'),
//            InsertPropertyResource::class => $this->whenLoaded('insertProperty'),
        ];
    }
}
