<?php

declare(strict_types=1);

namespace App\AMQP\Jewelleries\Jewellery\Validators;

use App\Share\Rules\NestedArrayItemsIntegerRule;
use Domain\Jewelleries\Jewellery\Models\Jewellery;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

final class JewelleryMessageStoreValidator
{
    public function validate(array $message): bool
    {
        $attributes = [
            'prcs_metal_sample','prcs_metal_colour','prcs_metal','jewellery_category','name','description',
            'part_number','approx_weight','is_active'
        ];

        $relationships = [
            'coverages','inserts','ring_props','bracelet_props','brooch_props','tie_clip_props','chain_props',
            'cuff_link_props','necklace_props','pendant_props','charm_pendant_props','piercing_props','earring_props'
        ];

        $validator = Validator::make(
            $message,
            [
                'data'                                => ['required','array:type,attributes,relationships','min:2'],
                'data.type'                           => ['required','string','in:' . Jewellery::TYPE_RESOURCE],
                'data.attributes'                     => [
                    'required', 'array:' . implode(',', $attributes)
                ],

                /*****  ATTRIBUTES  *****/

                'data.attributes.prcs_metal_sample'  => ['required', 'integer'],
                'data.attributes.prcs_metal_colour'  => ['required', 'string'],
                'data.attributes.prcs_metal'         => ['required', 'string'],
                'data.attributes.jewellery_category' => ['required', 'string'],
                'data.attributes.name'               => ['required', 'string'],
                'data.attributes.description'        => ['required', 'string'],
                'data.attributes.part_number'        => ['required', 'string', 'unique:jewelleries,part_number'],
                'data.attributes.approx_weight'      => ['required', 'string'],
                'data.attributes.is_active'          => ['required', 'boolean'],

                /*****  RELATIONSHIPS  *****/

                'data.relationships'                                   => ['required','array:' . implode(',', $relationships)],

                /*** coverages ***/
                'data.relationships.coverages'                         => ['present','array'],
                'data.relationships.coverages.0'                       => ['required','string',new NestedArrayItemsIntegerRule()],
//                'data.relationships.coverages.*.name'                  => ['required','string',new NestedArrayItemsIntegerRule()],

                /*** inserts ***/
                'data.relationships.inserts'                           => ['present','required', 'array'],
                'data.relationships.inserts.stone'                     => ['sometimes','required', 'string'],
                'data.relationships.inserts.shape'                     => ['sometimes','required', 'string'],
                'data.relationships.inserts.colour'                    => ['sometimes','required', 'string'],
                'data.relationships.inserts.properties'                => ['sometimes','required', 'array'],

                /*** rings ***/
                'data.relationships.ring_props'                        => ['present','required_unless:data.relationships.ring_props.sizes,array','array:sizes'],
                'data.relationships.ring_props.sizes'                  => ['required_unless:data.relationships.ring_props.*.quantity,null','array'],

                /*** bracelets ***/
                'data.relationships.bracelet_props'                    => ['required', 'array:sizes,body_part,weavings'],
                'data.relationships.bracelet_props.body_part'          => ['sometimes','required', 'string'],
                'data.relationships.bracelet_props.sizes'              => ['nullable','required', 'array','min:1'],
                'data.relationships.bracelet_props.sizes.*'            => ['sometimes','required', 'array','min:4'],
                'data.relationships.bracelet_props.sizes.*.size'       => ['sometimes','required', 'decimal:0,2'],
                'data.relationships.bracelet_props.sizes.*.unit'       => ['sometimes','required', 'string'],
                'data.relationships.bracelet_props.sizes.*.quantity'   => ['sometimes','required', 'integer'],
                'data.relationships.bracelet_props.sizes.*.price'      => ['sometimes','required', 'decimal:0,2'],
                'data.relationships.bracelet_props.weavings'           => ['present', 'array'],

                /*** brooches ***/
                'data.relationships.brooch_props'                      => ['present', 'array'],

                /*** tie clips ***/
                'data.relationships.tie_clip_props'                    => ['present', 'array'],

                /*** chains ***/
                'data.relationships.chain_props'                       => ['present', 'array'],

                /*** cuff links ***/
                'data.relationships.cuff_link_props'                   => ['present', 'array'],

                /*** necklaces ***/
                'data.relationships.necklace_props'                    => ['present', 'array'],

                /*** pendants ***/
                'data.relationships.pendant_props'                     => ['present', 'array'],

                /*** charm pendants ***/
                'data.relationships.charm_pendant_props'               => ['present', 'array'],

                /*** piercing ***/
                'data.relationships.piercing_props'                    => ['present', 'array'],

                /*** earrings ***/
                'data.relationships.earring_props'                     => ['present', 'array'],
            ]
        );

        if ($validator->fails()) {
            log::error($validator->errors());
        }

        return true;
    }
}
