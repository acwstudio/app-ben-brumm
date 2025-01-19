<?php

declare(strict_types=1);

namespace App\Http\Admin\Inserts\Insert\Requests;

use Domain\Inserts\Insert\Models\Insert;
use Illuminate\Foundation\Http\FormRequest;

final class InsertUpdateRequest extends FormRequest
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
        return [
            'data'                                => ['required','array:type,attributes','min:2'],
            'data.type'                           => ['required','string','in:' . Insert::TYPE_RESOURCE],
            'data.attributes'                     => [
                'required','array:jewellery_id,stone_id,insert_colour_id,insert_shape_id,insert_property_id'
            ],
            'data.attributes.jewellery_id'         => ['sometimes','required','integer','exists:jewelleries,id'],
            'data.attributes.stone_id'             => ['sometimes','required','integer','exists:stones,id'],
            'data.attributes.insert_colour_id'     => ['sometimes','required','integer','exists:insert_colours,id'],
            'data.attributes.insert_shape_id'      => ['sometimes','required','integer','exists:insert_shapes,id'],
            'data.attributes.insert_property_id'   => [
                'sometimes','required','integer','exists:insert_properties,id','unique:inserts,insert_property_id'
            ],
            // relationships
        ];
    }
}
