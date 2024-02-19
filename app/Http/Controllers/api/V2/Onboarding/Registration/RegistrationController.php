<?php

namespace App\Http\Controllers\api\V2\Onboarding\Registration;

use App\Http\Controllers\Controller;

use App\Http\Requests\V2\Onboarding\Registration\RegistrationRequest;
use App\Interfaces\Repositories\V2\Onboarding\RegistrationRepositoryInterface;

use App\Interfaces\Repositories\V2\Onboarding\VerificationRepositoryInterface;
use App\Repositories\V2\Onboarding\Registration\RegistrationRepository;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{

    function __construct(
    protected RegistrationRepositoryInterface  $registrationRepository,
    protected VerificationRepositoryInterface $verificationRepository
    )
    {

    }

    /**
     * Onboard new user
     */

     public function register(RegistrationRequest $request)
     {
        $validated_data = $request->validated();
        if(!$created = $this->registrationRepository->create($validated_data))
        {
          return  respondError(400, 'The registration is not successful');
        }
        $this->verificationRepository->getOtp($created->toArray());
        return respondSuccess('Registration is succesfull, Kindly check your mail for your One Time Password', $created);
    }
}
