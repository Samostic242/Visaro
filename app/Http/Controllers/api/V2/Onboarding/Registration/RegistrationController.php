<?php

namespace App\Http\Controllers\Api\V2\Onboarding\Registration;

use App\Http\Controllers\Controller;
use App\Http\Requests\V2\Onboarding\Registration\OTPRequest;
use App\Http\Requests\V2\Onboarding\Registration\RegistrationRequest;
use App\Interfaces\Repositories\V2\Onboarding\RegistrationRepositoryInterface;
use App\Interfaces\Repositories\V2\Onboarding\VerificationRepositoryInterface;

/**
 * @group User Onboarding
 * @subgroup Registration
 * @description APIs for Onboarding
 */
class RegistrationController extends Controller
{

    function __construct(
        protected RegistrationRepositoryInterface $registrationRepository,
        protected VerificationRepositoryInterface $verificationRepository
    )
    {

    }

    /**
     * Get email OTP
     */
    public function getOTP(OTPRequest $request)
    {
        $validated = $request->validated();
        return $this->registrationRepository->getCode($validated);
    }

    /**
     * Register
     */
    public function register(RegistrationRequest $request)
    {
        $validated_data = $request->validated();
        if (!$created = $this->registrationRepository->create($validated_data)) {
            return respondError(400, '01', 'The registration is not successful');
        }
        $this->verificationRepository->getOtp($created->toArray());
        return respondSuccess('Registration is successful, Kindly check your mail for your One Time Password', $created);
    }


    /**
     * Complete user registration process
     */
    public function updateUser(RegistrationRequest $request)
    {
        $validated_data = $request->validated();
        $id = auth()->user()->id;
        if (!$update = $this->registrationRepository->updateUser($id, $validated_data)) {
            return respondError(400, '01', 'An error occurred');
        }
        return respondSuccess('Updated Successfully', $update);
    }
}
