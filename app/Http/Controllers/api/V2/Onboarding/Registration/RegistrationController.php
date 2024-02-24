<?php

namespace App\Http\Controllers\api\V2\Onboarding\Registration;

use App\Http\Controllers\Controller;

use App\Http\Requests\V2\Onboarding\Registration\OTPRequest;
use App\Http\Requests\V2\Onboarding\Registration\RegistrationRequest;

use App\Interfaces\Repositories\V2\Onboarding\RegistrationRepositoryInterface;
use App\Interfaces\Repositories\V2\Onboarding\VerificationRepositoryInterface;
use App\Repositories\V2\Onboarding\Registration\RegistrationRepository;
use Illuminate\Http\Request;

/**
 * @group Onboarding
 * @description APIs for Onboarding User
 */
class RegistrationController extends Controller
{

    function __construct(
    protected RegistrationRepositoryInterface  $registrationRepository,
    protected VerificationRepositoryInterface $verificationRepository
    )
    {

    }

    /**
     * Send One Time Password Email to the User
     */
     public function getOTP(OTPRequest $request){
        $validated = $request->validated();
        return $this->registrationRepository->getCode($validated);
     }

    /**
     * Onboard new user
     */
     public function register(RegistrationRequest $request)
     {
        $validated_data = $request->validated();
        if(!$created = $this->registrationRepository->create($validated_data)){
          return  respondError(400, 'The registration is not successful');
        }
        $this->verificationRepository->getOtp($created->toArray());
        return respondSuccess('Registration is succesfull, Kindly check your mail for your One Time Password', $created);
    }


    /**
     * Completes the user registration process and update the user details
     */
    public function updateUser(RegistrationRequest $request)
    {
        $validated_data = $request->validated();
        $id = auth()->user()->id;
        if(!$update = $this->registrationRepository->updateUser($id, $validated_data)){
            return respondError(400, 'An error occured');
        }
        return respondSuccess('Updated Successfully', $update);
    }
}
