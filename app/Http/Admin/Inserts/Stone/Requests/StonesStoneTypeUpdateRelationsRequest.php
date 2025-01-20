<?php

declare(strict_types=1);

namespace App\Http\Admin\Inserts\Stone\Requests;

use Domain\Inserts\StoneType\Models\StoneType;
use Illuminate\Foundation\Http\FormRequest;

final class StonesStoneTypeUpdateRelationsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'data'      => ['required', 'array'],
            'data.id'   => ['required','integer','exists:stone_types,id'],
            'data.type' => ['required','string','in:' . StoneType::TYPE_RESOURCE],
        ];
    }
}
