<?php

declare(strict_types=1);

namespace App\Http\Auth\Controllers\Customers;

use App\Http\Auth\Controllers\BaseAuthController;
use App\Http\Auth\Requests\Customers\CustomerLoginRequest;
use App\Http\Auth\Requests\Customers\CustomerRegisterRequest;
use Domain\Customers\Models\Customer;
use Illuminate\Http\JsonResponse;

final class CustomerAuthController extends BaseAuthController
{
    /**
     * Register a User.
     *
     * @param CustomerRegisterRequest $request
     * @return JsonResponse
     */
    public function register(CustomerRegisterRequest $request): JsonResponse
    {
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $customer = Customer::create($input);
        $success['customer'] =  $customer;

        return $this->sendResponse($success, 'Customer register successfully.');
    }

    /**
     * Get a JWT via given credentials.
     *
     * @param CustomerLoginRequest $request
     * @return JsonResponse
     */
    public function login(CustomerLoginRequest $request): JsonResponse
    {
        $credentials = $request->only('email', 'password');

        if (! $token = auth('customer')->attempt($credentials)) {
            return $this->sendError('Unauthorised.', ['error'=>'Unauthorised']);
        }

        $success = $this->respondWithToken((string)$token);

        return $this->sendResponse($success, 'Customer login successfully.');
    }

    /**
     * Get the authenticated User.
     *
     * @return JsonResponse
     */
    public function profile(): JsonResponse
    {
        $success = auth('customer')->user();

        return $this->sendResponse($success, 'Refresh token return successfully.');
    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return JsonResponse
     */
    public function logout(): JsonResponse
    {
        auth('customer')->logout();

        return $this->sendResponse([], 'Successfully logged out.');
    }

    /**
     * Refresh a token.
     *
     * @return JsonResponse
     */
    public function refresh(): JsonResponse
    {
        $success = $this->respondWithToken(auth('customer')->refresh());

        return $this->sendResponse($success, 'Refresh token return successfully.');
    }

    /**
     * Get the token array structure.
     *
     * @param string $token
     *
     * @return JsonResponse
     */
    protected function respondWithToken(string $token): JsonResponse
    {
        return response()->json(
            [
                'access_token' => $token,
                'token_type' => 'bearer',
                'expires_in' => auth('customer')->factory()->getTTL() * 60,
            ]
        );
    }
}
