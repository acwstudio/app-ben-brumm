<?php

declare(strict_types=1);

namespace App\Http\Admin\Inserts\Insert\Requests;

use Domain\Inserts\Stone\Models\Stone;
use Illuminate\Foundation\Http\FormRequest;

final class InsertsStoneUpdateRelationsRequest extends FormRequest
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
            'data'      => ['required', 'array'],
            'data.id'   => ['required','integer','exists:stones,id'],
            'data.type' => ['required','string','in:' . Stone::TYPE_RESOURCE],
        ];
    }
}
