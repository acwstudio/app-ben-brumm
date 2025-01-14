<?php

declare(strict_types=1);

namespace App\Http\Admin\Jewelleries\Jewellery\Resources;

use App\Http\Admin\Inserts\Insert\Resources\InsertCollection;
use App\Http\Admin\Inserts\Insert\Resources\InsertResource;
use App\Http\Admin\Inserts\Stone\Resources\StoneCollection;
use App\Http\Admin\Jewelleries\JewelleryCategory\Resources\JewelleryCategoryResource;
use App\Http\Admin\Shared\Resources\Traits\IncludeRelatedEntitiesResourceTrait;
use App\Http\Resources\BraceletPropViews\BraceletPropViewResource;
use Domain\Jewelleries\Jewellery\Models\Jewellery;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin Jewellery */
final class JewelleryResource extends JsonResource
{
    use IncludeRelatedEntitiesResourceTrait;

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|Arrayable|\JsonSerializable
     */
    public function toArray(Request $request): array|\JsonSerializable|Arrayable
    {
        return [
            'id' => $this->id,
            'type' => Jewellery::TYPE_RESOURCE,
            'attributes' => $this->attributeItems(),
            'relationships' => [
                'jewelleryCategory' => $this->sectionRelationships(
                    'jewelleries.jewellery-category',
                    JewelleryCategoryResource::class
                ),
                'braceletPropView' => $this->sectionRelationships(
                    'jewellery.bracelet-prop-view',
                    BraceletPropViewResource::class
                ),
                'inserts' => $this->sectionRelationships(
                    'jewellery.inserts',
                    InsertCollection::class
                ),
                'stones' => $this->sectionRelationships(
                    'jewelleries.stones',
                    StoneCollection::class
                ),
            ]
        ];
    }

    function relations(): array
    {
        return [
            JewelleryCategoryResource::class => $this->whenLoaded('jewelleryCategory'),
            BraceletPropViewResource::class  => $this->whenLoaded('braceletPropView'),
            InsertCollection::class  => $this->whenLoaded('inserts'),
            StoneCollection::class  => $this->whenLoaded('stones'),
        ];
    }
}
