<?php

declare(strict_types=1);

namespace App\Http\Auth\Controllers\Users;

use App\Http\Auth\Requests\Users\UserForgotPasswordRequest;
use App\Http\Auth\Requests\Users\UserResetPasswordRequest;
use App\Http\Shared\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Password;

final class UserForgotPasswordController extends Controller
{
    public function forgot(UserForgotPasswordRequest $request): JsonResponse
    {
        $credentials = $request->only('email');

        Password::broker('users')->sendResetLink($credentials);

        return response()->json(["msg" => 'Reset password link sent on your email id.']);
    }

    public function reset(UserResetPasswordRequest $request): JsonResponse
    {
        $credentials = $request->only('email', 'password', 'token');

        $reset_password_status = Password::broker('users')->reset($credentials, function ($user, $password) {
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
