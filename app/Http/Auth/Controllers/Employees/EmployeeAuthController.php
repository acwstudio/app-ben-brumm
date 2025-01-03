<?php

declare(strict_types=1);

namespace App\Http\Auth\Controllers\Employees;

use App\Http\Auth\Controllers\BaseAuthController;
use App\Http\Auth\Requests\Employees\EmployeeLoginRequest;
use App\Http\Auth\Requests\Employees\EmployeeRegisterRequest;
use Domain\Employees\Models\Employee;
use Illuminate\Http\JsonResponse;

final class EmployeeAuthController extends BaseAuthController
{
    /**
     * Register an Employee.
     *
     * @param EmployeeRegisterRequest $request
     * @return JsonResponse
     */
    public function register(EmployeeRegisterRequest $request): JsonResponse
    {
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $employee = Employee::create($input);
        $success['employee'] =  $employee;

        return $this->sendResponse($success, 'Employee register successfully.');
    }

    /**
     * Get a JWT via given credentials.
     *
     * @param EmployeeLoginRequest $request
     * @return JsonResponse
     */
    public function login(EmployeeLoginRequest $request): JsonResponse
    {
        $credentials = $request->only('email', 'password');

        if (! $token = auth('employee')->attempt($credentials)) {
            return $this->sendError('Unauthorised.', ['error'=>'Unauthorised']);
        }

        $success = $this->respondWithToken($token);

        return $this->sendResponse($success, 'Employee login successfully.');
    }

    /**
     * Get the authenticated User.
     *
     * @return JsonResponse
     */
    public function profile(): JsonResponse
    {
        $success = auth('employee')->user();

        return $this->sendResponse($success, 'Refresh token return successfully.');
    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return JsonResponse
     */
    public function logout(): JsonResponse
    {
        auth('employee')->logout();

        return $this->sendResponse([], 'Successfully logged out.');
    }

    /**
     * Refresh a token.
     *
     * @return JsonResponse
     */
    public function refresh(): JsonResponse
    {
        $success = $this->respondWithToken(auth('employee')->refresh());

        return $this->sendResponse($success, 'Refresh token return successfully.');
    }

    /**
     * Get the token array structure.
     *
     * @param string $token
     *
     * @return JsonResponse
     */
    protected function respondWithToken($token): JsonResponse
    {
        return response()->json(
            [
                'access_token' => $token,
                'token_type' => 'bearer',
                'expires_in' => auth('employee')->factory()->getTTL() * 60,
            ]
        );
    }
}
