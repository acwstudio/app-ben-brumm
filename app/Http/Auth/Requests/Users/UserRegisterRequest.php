<?php

declare(strict_types=1);

namespace App\Http\Auth\Requests\Users;

use Illuminate\Foundation\Http\FormRequest;

final class UserRegisterRequest extends FormRequest
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
            'name' => ['required'],
            'email' => ['required','email','unique:users,email'],
            'password' => ['required'],
            'c_password' => ['required','same:password'],
        ];
    }
}
