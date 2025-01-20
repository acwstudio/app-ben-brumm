<?php

declare(strict_types=1);

namespace App\Http\Admin\Inserts\Stone\Requests;

use Domain\Inserts\Insert\Models\Insert;
use Domain\Inserts\Stone\Models\Stone;
use Domain\Inserts\StoneType\Models\StoneType;
use Illuminate\Foundation\Http\FormRequest;

final class StoneStoreRequest extends FormRequest
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
            'data.type'                           => ['required','string','in:' . Stone::TYPE_RESOURCE],
            'data.attributes'                     => [
                'required','array:stone_type_id,name,description,is_natural,is_active','min:1',
            ],
            'data.attributes.stone_type_id' => ['required','integer','exists:stone_types,id'],
            'data.attributes.name'          => ['required','string','unique:stones,name'],
            'data.attributes.description'   => ['required','string'],
            'data.attributes.is_active'     => ['required','boolean'],
            'data.attributes.is_natural'    => ['required','boolean'],
            // relationships
            'data.relationships'            => ['sometimes','required','array:inserts,stoneTypes'],
            // one to many Stone to Inserts
            'data.relationships.inserts'             => ['sometimes','required','array:data'],
            'data.relationships.inserts.data'        => ['sometimes','required','array','min:1'],
            'data.relationships.inserts.data.*'      => ['sometimes','required','array:id,type'],
            'data.relationships.inserts.data.*.type' => ['sometimes','required','string','in:' . Insert::TYPE_RESOURCE],
            'data.relationships.inserts.data.*.id'   => ['sometimes','required','integer', 'distinct', 'exists:inserts,id'],
            // many to one Stones to Stone Type
            // you can do it in the 'data.attributes.stone_type_id' key
        ];
    }
}
