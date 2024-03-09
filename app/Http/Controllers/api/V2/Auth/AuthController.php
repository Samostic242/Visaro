<?php

namespace App\Http\Controllers\api\V2\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\V2\Auth\AuthenticationRequest;
use App\Http\Requests\V2\Auth\ForgotPasswordRequest;
use App\Http\Requests\V2\Auth\ResetPasswordRequest;
use App\Http\Resources\V2\User\Account\UserAccountResource;
use App\Services\V2\Auth\UserAuthService;
use Illuminate\Http\Request;

/**
 * @group Authentication
 * @description APIs for managing Authentication
 */
class AuthController extends Controller
{

    function __construct(
        protected UserAuthService $userAuthService
    )
    {

    }

    /**
     * Logs the user in
     */
    public function login(AuthenticationRequest $request)
    {
        $validated_data = $request->validated();
        $logged_in = $this->userAuthService->login($validated_data['email'], $validated_data['password']);
        if (!$logged_in['status']) {
            return respondError($logged_in['code'], $logged_in['message']);
        }
        return respondSuccess($logged_in['message'], $logged_in['data']);
    }

    /**
     * Fecthes the Authenticated User
     */
    public function fetchUser(Request $request)
    {
        $user = $this->userAuthService->getUser();
        if (!$user) {
            respondError(404, '01', "User not found");
        }
        return respondSuccess('User fetched successfully', new UserAccountResource($user));
    }

    /**
     * Request for password reset OTP
     */
    public function forgotPassword(ForgotPasswordRequest $request)
    {
        $validated_data = $request->validated();
        $initiated = $this->userAuthService->forgotPassword($validated_data);
        if (!$initiated['status']) {
            return respondError($initiated['code'], $initiated['message']);
        }
        return respondSuccess($initiated['message'], $initiated['data']);
    }

    /**
     * Verifies the OTP and Update the user new password
     */
    public function resetPassword(ResetPasswordRequest $request)
    {
        $validated_data = $request->validated();
        $updated = $this->userAuthService->resetPassword($validated_data['code'], $validated_data['email'], $validated_data['password']);
        if (!$updated['status']) {
            return respondError($updated['code'], $updated['message']);
        }
        return respondSuccess($updated['message'], $updated['data']);
    }
}
