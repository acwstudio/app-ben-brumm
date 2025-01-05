<?php

declare(strict_types=1);

namespace App\Http\Auth\Controllers\Customers;

use App\Http\Auth\Requests\Customers\CustomerForgotPasswordRequest;
use App\Http\Auth\Requests\Customers\CustomerResetPasswordRequest;
use App\Http\Shared\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Password;

final class CustomerForgotPasswordController extends Controller
{
    public function forgot(CustomerForgotPasswordRequest $request): JsonResponse
    {
        $credentials = $request->only('email');

        Password::broker('customers')->sendResetLink($credentials);

        return response()->json(["msg" => 'Reset password link sent on your email id.']);
    }

    public function reset(CustomerResetPasswordRequest $request): JsonResponse
    {
        $credentials = $request->only('email', 'password', 'token');

        $reset_password_status = Password::broker('customers')->reset($credentials, function ($user, $password) {
            $user->password = $password;
            $user->save();
        });

        auth()->logout();

        if ($reset_password_status == Password::INVALID_TOKEN) {
            return response()->json(["msg" => "Invalid token provided"], 400);
        }

        return response()->json(["msg" => "Password has been successfully changed"]);
    }
}
