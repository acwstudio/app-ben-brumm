<?php

declare(strict_types=1);

namespace App\Http\Admin\Inserts\StoneType\Requests;

use Domain\Inserts\Stone\Models\Stone;
use Domain\Inserts\StoneType\Models\StoneType;
use Illuminate\Foundation\Http\FormRequest;

final class StoneTypeUpdateRequest extends FormRequest
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
            'data.type'                           => ['required','string','in:' . StoneType::TYPE_RESOURCE],
            'data.attributes'                     => [
                'required','array:name,description,is_active','min:1',
            ],
            'data.attributes.name'          => ['sometimes','required','string','unique:stone_types,name'],
            'data.attributes.description'   => ['sometimes','required','string'],
            'data.attributes.is_active'     => ['sometimes','required','boolean'],
            // relationships
            'data.relationships'            => ['sometimes','required','array:stones'],
            // one to many Stone Type to Stones
            'data.relationships.stones'             => ['sometimes','required','array:data'],
            'data.relationships.stones.data'        => ['sometimes','required','array','min:1'],
            'data.relationships.stones.data.*'      => ['sometimes','required','array:id,type'],
            'data.relationships.stones.data.*.type' => ['sometimes','required','string','in:' . Stone::TYPE_RESOURCE],
            'data.relationships.stones.data.*.id'   => ['sometimes','required','integer', 'distinct', 'exists:stones,id'],
        ];
    }
}
