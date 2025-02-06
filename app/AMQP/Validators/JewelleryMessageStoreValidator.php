<?php

declare(strict_types=1);

namespace App\AMQP\Validators;

use Domain\Jewelleries\Jewellery\Models\Jewellery;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

final class JewelleryMessageStoreValidator
{
    public function validate(array $message): bool
    {
        $attributes = [
            'prcs_metal_sample','prcs_metal_colour','prcs_metal','jewellery_category','name','description',
            'part_number','approx_weight','is_active'
        ];

        $validator = Validator::make(
            $message[0],
            [
                'data'                                => ['required','array:type,attributes,relationships','min:2'],
                'data.type'                           => ['required','string','in:' . Jewellery::TYPE_RESOURCE],
                'data.attributes'                     => [
                    'required',
                    'array:' . implode(',', $attributes)
                ],
//                attributes
                'data.attributes.prcs_metal_sample'  => ['required', 'integer'],
                'data.attributes.prcs_metal_colour'  => ['required', 'string'],
                'data.attributes.prcs_metal'         => ['required', 'string'],
                'data.attributes.jewellery_category' => ['required', 'string'],
                'data.attributes.name'               => ['required', 'string'],
                'data.attributes.description'        => ['required', 'string'],
                'data.attributes.part_number'        => ['required', 'string', 'unique:jewelleries,part_number'],
                'data.attributes.approx_weight'      => ['required', 'string'],
                'data.attributes.is_active'          => ['required', 'boolean'],
//                relationships
                'data.relationships'                                   => ['required','array:coverages,inserts,bracelet_props'],
                'data.relationships.coverages'                         => ['sometimes','required', 'array','min:1'],
//                rings
                'data.relationships.ring_props'                        => ['sometimes','required', 'array'],
//                bracelets
                'data.relationships.bracelet_props'                    => ['sometimes','required', 'array:details,body_part'],
                'data.relationships.bracelet_props.body_part'          => ['sometimes','required', 'string'],
                'data.relationships.bracelet_props.details'            => ['sometimes','required', 'array','min:1'],
                'data.relationships.bracelet_props.details.*'          => ['sometimes','required', 'array','min:4'],
                'data.relationships.bracelet_props.details.*.size'     => ['sometimes','required', 'decimal:0,2'],
                'data.relationships.bracelet_props.details.*.unit'     => ['sometimes','required', 'string'],
                'data.relationships.bracelet_props.details.*.quantity' => ['sometimes','required', 'integer'],
                'data.relationships.bracelet_props.details.*.price'    => ['sometimes','required', 'decimal:0,2'],
//                brooch
                'data.relationships.brooch_props'                      => ['sometimes','required', 'array'],
                'data.relationships.tie_clip_props'                    => ['sometimes','required', 'array'],
                'data.relationships.chain_props'                       => ['sometimes','required', 'array'],
                'data.relationships.cuff_link_props'                   => ['sometimes','required', 'array'],
                'data.relationships.necklace_props'                    => ['sometimes','required', 'array'],
                'data.relationships.pendant_props'                     => ['sometimes','required', 'array'],
                'data.relationships.charm_pendant_props'               => ['sometimes','required', 'array'],
                'data.relationships.piercing_props'                    => ['sometimes','required', 'array'],
//                earrings
                'data.relationships.earring_props'                     => ['sometimes','required', 'array'],
                'data.relationships.earring_props.clasp'               => ['sometimes','required', 'string'],
                'data.relationships.earring_props.quantity'            => ['sometimes','required', 'integer'],
                'data.relationships.earring_props.price'               => ['sometimes','required', 'decimal:2'],
            ]
        );

        if ($validator->fails()) {
            log::error($validator->errors());
        }

        return true;
    }
}
