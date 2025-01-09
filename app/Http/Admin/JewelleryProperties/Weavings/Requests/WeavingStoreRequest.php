<?php

declare(strict_types=1);

namespace App\Http\Admin\JewelleryProperties\Weavings\Requests;

use Domain\JewelleryProperties\BraceletProp\Models\BraceletProp;
use Domain\JewelleryProperties\BraceletPropWeaving\Models\BraceletPropWeaving;
use Domain\JewelleryProperties\ChainProp\Models\ChainProp;
use Domain\JewelleryProperties\ChainPropWeaving\Models\ChainPropWeaving;
use Domain\JewelleryProperties\Weaving\Models\Weaving;
use Illuminate\Foundation\Http\FormRequest;

final class WeavingStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        if ($this->getMethod() === 'POST') {
            $attributes = [
                'data'                                => ['required','array','min:2'],
                'data.type'                           => ['required','string','in:' . Weaving::TYPE_RESOURCE],
                'data.attributes'                     => ['required','array:name'],
                'data.attributes.name'                => ['required','string','unique:weavings,name'],
                // relationships
                'data.relationships'                       => [
                    'sometimes','required','array:chainPropWeavings,braceletPropWeavings'
                ],
            ];
        } else {
            $attributes = [
                'data'                                => ['sometimes','required','array','min:2'],
                'data.type'                           => ['sometimes','required','string','in:' . Weaving::TYPE_RESOURCE],
                'data.attributes'                     => ['sometimes','required','array:name'],
                'data.attributes.name'                => ['sometimes','required','string','unique:weavings,name'],
                // relationships
                'data.relationships'                       => [
                    'sometimes','required','array:chainProps,braceletProps,chainPropWeavings,braceletPropWeavings'
                ],
            ];
        }

        $relationships = [
            // many to many chainProps
            'data.relationships.chainProps'             => ['sometimes','required','array','required_array_keys:data'],
            'data.relationships.chainProps.data'        => ['array','min:1'],
            'data.relationships.chainProps.data.*'      => ['sometimes','required','array','required_array_keys:id,type'],
            'data.relationships.chainProps.data.*.type' => ['present','string','in:' . ChainProp::TYPE_RESOURCE],
            'data.relationships.chainProps.data.*.id'   => ['present','string', 'distinct', 'exists:chain_props,id'],
            // many to many braceletProps
            'data.relationships.braceletProps'             => ['sometimes','required','array','required_array_keys:data'],
            'data.relationships.braceletProps.data'        => ['array','min:1'],
            'data.relationships.braceletProps.data.*'      => ['sometimes','required','array','required_array_keys:id,type'],
            'data.relationships.braceletProps.data.*.type' => ['present','string','in:' . BraceletProp::TYPE_RESOURCE],
            'data.relationships.braceletProps.data.*.id'   => ['present','string', 'distinct', 'exists:bracelet_props,id'],
            // one to many chainPropWeavings
            'data.relationships.chainPropWeavings'             => ['sometimes','required','array','required_array_keys:data'],
            'data.relationships.chainPropWeavings.data'        => ['array','min:1'],
            'data.relationships.chainPropWeavings.data.*'      => ['sometimes','required','array','required_array_keys:id,type'],
            'data.relationships.chainPropWeavings.data.*.type' => ['present','string','in:' . ChainPropWeaving::TYPE_RESOURCE],
            'data.relationships.chainPropWeavings.data.*.id'   => ['present','string', 'distinct', 'exists:chain_prop_weavings,id'],
            // one to many braceletPropWeavings
            'data.relationships.braceletPropWeavings'             => ['sometimes','required','array','required_array_keys:data'],
            'data.relationships.braceletPropWeavings.data'        => ['array','min:1'],
            'data.relationships.braceletPropWeavings.data.*'      => ['sometimes','required','array','required_array_keys:id,type'],
            'data.relationships.braceletPropWeavings.data.*.type' => ['present','string','in:' . BraceletPropWeaving::TYPE_RESOURCE],
            'data.relationships.braceletPropWeavings.data.*.id'   => ['present','string', 'distinct', 'exists:bracelet_prop_weavings,id'],
        ];

        return array_merge($attributes, $relationships);
    }

    public function messages(): array
    {
        return [
            'data.relationships' => 'The :attribute field includes unacceptable relationships.',
        ];
    }
}
