<?php

declare(strict_types=1);

namespace App\Http\Auth\Requests\Users;

use Illuminate\Foundation\Http\FormRequest;

final class UserResetPasswordRequest extends FormRequest
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
            'email' => ['required','email','exists:users,email'],
            'token' => ['required','string'],
            'password' => ['required','string','confirmed']
        ];
    }
}