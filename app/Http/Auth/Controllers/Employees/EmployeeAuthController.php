<?php

declare(strict_types=1);

namespace App\Http\Auth\Controllers\Employees;

use App\Http\Controllers\Auth\BaseController;
use Domain\Employees\Models\Employee;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

final class EmployeeAuthController extends BaseController
{
    /**
     * Register an Employee.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function register(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'c_password' => 'required|same:password',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $employee = Employee::create($input);
        $success['employee'] =  $employee;

        return $this->sendResponse($success, 'Employee register successfully.');
    }

    /**
     * Get a JWT via given credentials.
     *
     * @return JsonResponse
     */
    public function login(): JsonResponse
    {
        $credentials = request(['email', 'password']);

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
