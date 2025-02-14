<?php

declare(strict_types=1);

namespace App\Http\Admin\PreciousMetals\PrcsMetal\Resources;

use App\Http\Admin\Shared\Resources\Traits\IncludeRelatedEntitiesResourceTrait;
use App\Http\Site\Jewelleries\JewelleryView\Resources\JewelleryViewResource;
use Domain\PreciousMetals\PrcsMetal\Models\PrcsMetal;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

final class PrcsMetalResource extends JsonResource
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
            'type' => PrcsMetal::TYPE_RESOURCE,
            'attributes' => $this->attributeItems(),
            'relationships' => [
                'jewelleryViews' => $this->sectionRelationships(
                    'prcs-metal.jewellery-views',
                    JewelleryViewResource::class
                ),
            ]
        ];
    }

    function relations(): array
    {
        return [
            JewelleryViewResource::class => $this->whenLoaded('jewelleryViews'),
        ];
    }
}
