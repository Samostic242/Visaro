<?php

namespace App\Http\Controllers\Api\V2\Auth;

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
     * Login
     */
    public function login(AuthenticationRequest $request)
    {
        $validated_data = $request->validated();
        $logged_in = $this->userAuthService->login($validated_data['email'], $validated_data['password']);
        if (!$logged_in['status']) {
<<<<<<< HEAD:app/Http/Controllers/api/V2/Auth/AuthController.php
            return respondError(400, $logged_in['code'], $logged_in['message']);
=======
            return respondError($logged_in['code'], '01', $logged_in['message']);
>>>>>>> 7c2bc70a5b335d2dcf8e0ab5201e3c0c7ab9ee3f:app/Http/Controllers/Api/V2/Auth/AuthController.php
        }
        return respondSuccess($logged_in['message'], $logged_in['data']);
    }

    /**
     * Fetch User profile
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
     * Initiate password reset
     */
    public function forgotPassword(ForgotPasswordRequest $request)
    {
        $validated_data = $request->validated();
        $initiated = $this->userAuthService->forgotPassword($validated_data['email']);
        if (!$initiated['status']) {
<<<<<<< HEAD:app/Http/Controllers/api/V2/Auth/AuthController.php
            return respondError(400, $initiated['code'], $initiated['message']);
=======
            return respondError($initiated['code'], '01', $initiated['message']);
>>>>>>> 7c2bc70a5b335d2dcf8e0ab5201e3c0c7ab9ee3f:app/Http/Controllers/Api/V2/Auth/AuthController.php
        }
        return respondSuccess($initiated['message'], $initiated['data']);
    }

    /**
     * Complete password reset
     */
    public function resetPassword(ResetPasswordRequest $request)
    {
        $validated_data = $request->validated();
        $updated = $this->userAuthService->resetPassword($validated_data['code'], $validated_data['email'], $validated_data['password']);
        if (!$updated['status']) {
<<<<<<< HEAD:app/Http/Controllers/api/V2/Auth/AuthController.php
            return respondError(400, $updated['code'], $updated['message']);
=======
            return respondError($updated['code'], '01', $updated['message']);
>>>>>>> 7c2bc70a5b335d2dcf8e0ab5201e3c0c7ab9ee3f:app/Http/Controllers/Api/V2/Auth/AuthController.php
        }
        return respondSuccess($updated['message'], $updated['data']);
    }
}
