<?php

declare(strict_types=1);

namespace App\Http\Site\Jewelleries\JewelleryView\Resources;

use App\Http\Admin\PreciousMetals\PrcsMetal\Resources\PrcsMetalResource;
use App\Http\Admin\PreciousMetals\PrcsMetalColour\Resources\PrcsMetalColourResource;
use App\Http\Admin\PreciousMetals\PrcsMetalCoverage\Resources\PrcsMetalCoverageCollection;
use App\Http\Admin\PreciousMetals\PrcsMetalCoverage\Resources\PrcsMetalCoverageResource;
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
                'prcsMetalSample' => $this->sectionRelationships(
                    'jewellery-views.prcs-metal-sample',
                    PrcsMetalSampleResource::class
                ),
                'prcsMetal' => $this->sectionRelationships(
                    'jewellery-views.prcs-metal',
                    PrcsMetalResource::class
                ),
                'prcsMetalColour' => $this->sectionRelationships(
                    'jewellery-views.prcs-metal-colour',
                    PrcsMetalColourResource::class
                ),
                'prcsMetalCoverages' => $this->sectionRelationships(
                    'jewellery-views.prcs-metal-coverages',
                    PrcsMetalCoverageCollection::class
                ),
            ]
        ];
    }

    function relations(): array
    {
        return [
            PrcsMetalSampleResource::class => $this->whenLoaded('prcsMetalSample'),
            PrcsMetalResource::class => $this->whenLoaded('prcsMetal'),
            PrcsMetalColourResource::class => $this->whenLoaded('prcsMetalColour'),
            PrcsMetalCoverageCollection::class => $this->whenLoaded('prcsMetalCoverages'),
        ];
    }
}
