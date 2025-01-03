<?php

declare(strict_types=1);

namespace App\Http\Auth\Controllers\Employees;

use App\Http\Auth\Requests\Employees\EmployeeForgotPasswordRequest;
use App\Http\Auth\Requests\Employees\EmployeeResetPasswordRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Password;

final class EmployeeForgotPasswordController extends Controller
{
    public function forgot(EmployeeForgotPasswordRequest $request): JsonResponse
    {
        $credentials = $request->only('email');

        Password::broker('employees')->sendResetLink($credentials);

        return response()->json(["msg" => 'Reset password link sent on your email id.']);
    }

    public function reset(EmployeeResetPasswordRequest $request): JsonResponse
    {
        $credentials = $request->only('email', 'password', 'token');

        $reset_password_status = Password::broker('employees')->reset($credentials, function ($user, $password) {
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
