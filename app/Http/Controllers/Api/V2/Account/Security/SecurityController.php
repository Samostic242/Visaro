<?php

namespace App\Http\Controllers\Api\V2\Account\Security;

use App\Http\Controllers\Controller;
use App\Http\Requests\V2\Account\Security\CreatePinRequest;
use App\Http\Requests\V2\Account\Security\CreateSecurityQuestionRequest;
use App\Interfaces\Repositories\V2\Account\Security\UserSecurityRepositoryInterface;
use Illuminate\Http\Request;

class SecurityController extends Controller
{
    function __construct(
        protected UserSecurityRepositoryInterface $userSecurityRepository
    )
    {

    }

    /**
     * Create A pin for the user
     */
    public function createPin(CreatePinRequest $request)
    {
        $validated_data = $request->validated();
        return $this->userSecurityRepository->createPin($validated_data);
    }

    /**
     * Create a security question for the user
     */
    public function createSecurityQuestion(CreateSecurityQuestionRequest $request)
    {
        $validated_data = $request->validated();
        return $this->userSecurityRepository->createSecurityQuestion($validated_data);
    }
}
