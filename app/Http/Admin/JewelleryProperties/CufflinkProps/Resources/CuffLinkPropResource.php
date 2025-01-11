<?php

declare(strict_types=1);

namespace App\Http\Admin\JewelleryProperties\CufflinkProps\Resources;

use App\Http\Admin\Jewelleries\Jewellery\Resources\JewelleryResource;
use App\Http\Admin\Shared\Resources\Traits\IncludeRelatedEntitiesResourceTrait;
use Domain\JewelleryProperties\CufflinkProp\Models\CuffLinkProp;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin CuffLinkProp */
final class CuffLinkPropResource extends JsonResource
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
            'type' => CuffLinkProp::TYPE_RESOURCE,
            'attributes' => $this->attributeItems(),
            'relationships' => [
                'jewellery' => $this->sectionRelationships(
                    'cuff-link-prop.jewellery',
                    JewelleryResource::class
                ),
            ]
        ];
    }

    function relations(): array
    {
        return [
            JewelleryResource::class => $this->whenLoaded('jewellery'),
        ];
    }
}
