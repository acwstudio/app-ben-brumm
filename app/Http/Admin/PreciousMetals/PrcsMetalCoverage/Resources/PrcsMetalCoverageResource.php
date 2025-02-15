<?php

declare(strict_types=1);

namespace App\Http\Admin\PreciousMetals\PrcsMetalCoverage\Resources;

use App\Http\Admin\Shared\Resources\Traits\IncludeRelatedEntitiesResourceTrait;
use App\Http\Site\Jewelleries\JewelleryView\Resources\JewelleryViewCollection;
use App\Http\Site\Jewelleries\JewelleryView\Resources\JewelleryViewResource;
use Domain\PreciousMetals\PrcsMetalCoverage\Models\PrcsMetalCoverage;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

final class PrcsMetalCoverageResource extends JsonResource
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
            'type' => PrcsMetalCoverage::TYPE_RESOURCE,
            'attributes' => $this->attributeItems(),
            'relationships' => [
                'jewelleryViews' => $this->sectionRelationships(
                    'prcs-metal-coverages.jewellery-views',
                    JewelleryViewCollection::class
                ),
            ]
        ];
    }

    function relations(): array
    {
        return [
            JewelleryViewCollection::class => $this->whenLoaded('jewelleryViews'),
        ];
    }
}
