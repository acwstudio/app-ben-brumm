<?php

declare(strict_types=1);

namespace App\Http\Admin\Inserts\InsertProperty\Requests;

use Domain\Inserts\InsertProperty\Models\InsertProperty;
use Illuminate\Foundation\Http\FormRequest;

final class InsertPropertyStoreRequest extends FormRequest
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
            'data'                                => ['required','array','min:2'],
            'data.type'                           => ['required','string','in:' . InsertProperty::TYPE_RESOURCE],
            'data.attributes'                     => [
                'required','array:quantity,weight,weight_unit,dimensions'
            ],
            'data.attributes.quantity'        => ['required','integer','gte:0'],
            'data.attributes.weight'          => ['required','decimal:0,3'],
            'data.attributes.weight_unit'     => ['required','string'],
            'data.attributes.dimensions'      => ['required','json'],
            // relationships
        ];
    }
}
