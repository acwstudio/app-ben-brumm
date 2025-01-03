<?php

declare(strict_types=1);

namespace App\Http\Auth\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Password;

final class ForgotUserPasswordController extends Controller
{
    public function forgot(): JsonResponse
    {
        $credentials = request()->validate(['email' => 'required|email']);

        Password::broker('users')->sendResetLink($credentials);

        return response()->json(["msg" => 'Reset password link sent on your email id.']);
    }

    public function reset(): JsonResponse
    {
        $credentials = request()->validate([
            'email' => 'required|email',
            'token' => 'required|string',
            'password' => 'required|string|confirmed'
        ]);

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
