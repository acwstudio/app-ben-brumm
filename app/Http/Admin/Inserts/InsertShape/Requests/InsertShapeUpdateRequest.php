<?php

declare(strict_types=1);

namespace App\Http\Admin\Inserts\InsertShape\Requests;

use Domain\Inserts\Insert\Models\Insert;
use Domain\Inserts\InsertShape\Models\InsertShape;
use Illuminate\Foundation\Http\FormRequest;

final class InsertShapeUpdateRequest extends FormRequest
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
            'data'                                => ['required','array:type,attributes,relationships','min:2'],
            'data.type'                           => ['required','string','in:' . InsertShape::TYPE_RESOURCE],
            'data.attributes'                     => [
                'required','array:name,description,is_active','min:1',
            ],
            'data.attributes.name'          => ['sometimes','required','string','unique:insert_shapes,name'],
            'data.attributes.description'   => ['sometimes','required','string'],
            'data.attributes.is_active'     => ['sometimes','required','boolean'],
            // relationships
            'data.relationships'            => ['sometimes','required','array:inserts'],
            // one to many Insert Colour to Inserts
            'data.relationships.inserts'             => ['sometimes','required','array:data'],
            'data.relationships.inserts.data'        => ['sometimes','required','array','min:1'],
            'data.relationships.inserts.data.*'      => ['sometimes','required','array:id,type'],
            'data.relationships.inserts.data.*.type' => ['sometimes','required','string','in:' . Insert::TYPE_RESOURCE],
            'data.relationships.inserts.data.*.id'   => ['sometimes','required','integer', 'distinct', 'exists:inserts,id'],
        ];
    }
}
