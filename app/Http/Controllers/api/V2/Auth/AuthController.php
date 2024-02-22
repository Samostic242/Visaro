<?php

namespace App\Http\Controllers\api\v2\auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\V2\Auth\AuthenticationRequest;
use App\Http\Requests\V2\Auth\ForgotPasswordRequest;
use App\Http\Requests\V2\Auth\ResetPasswordRequest;
use App\Interfaces\Repositories\V2\Auth\AuthenticationRepositoryInterface;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //

    function __construct(
        protected AuthenticationRepositoryInterface $authRepository
    )
    {

    }

    /* Logs the user in */

    public function login(AuthenticationRequest $request)
    {
        $validated_data = $request->validated();
        $login = $this->authRepository->login($validated_data);
        return $login;
    }

    public function fetchUser(Request $request)
    {
        $data = $this->authRepository->getUser();
        return \respondSuccess('User Fecthed successfully', $data);
    }

    public function forgotPassword(ForgotPasswordRequest $request)
    {
        $validated_data = $request->validated();
        return $this->authRepository->forgotPassword($validated_data);
    }

    public function resetPassword(ResetPasswordRequest $request)
    {
        $validated_data = $request->validated();
        if(!$this->authRepository->resetPassword($validated_data))
        {
            return \respondError(400, 'Incorrect/expired OTP, kindly request for another one');
        }

        return \respondSuccess('Your password has been reset successfully, Kindly proceed to login');
    }
}
