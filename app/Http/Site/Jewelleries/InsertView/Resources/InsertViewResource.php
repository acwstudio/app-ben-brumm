<?php

declare(strict_types=1);

namespace App\Http\Site\Jewelleries\InsertView\Resources;

use App\Http\Admin\Shared\Resources\Traits\IncludeRelatedEntitiesResourceTrait;
use App\Http\Site\Jewelleries\JewelleryView\Resources\JewelleryViewResource;
use Domain\Views\InsertViews\Models\InsertView;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

final class InsertViewResource extends JsonResource
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
            'type' => InsertView::TYPE_RESOURCE,
            'attributes' => $this->attributeItems(),
            'relationships' => [
                'jewelleryView' => $this->sectionRelationships(
                    'insert-views.jewellery-view',
                    JewelleryViewResource::class
                )
            ]
        ];
    }

    function relations(): array
    {
        return [
            JewelleryViewResource::class => $this->whenLoaded('jewelleryView'),
        ];
    }
}
