<?php

namespace App\Http\Controllers\api\V2\Merchant\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\V2\Merchant\Auth\MerchantForgotPasswordRequest;
use App\Http\Requests\V2\Merchant\Auth\MerchantResetPasswordRequest;
use App\Http\Resources\V2\Merchant\Account\MerchantAccountResource;
use App\Interfaces\Repositories\V2\Merchant\Auth\MerchantAuthenticationInterface;
use Illuminate\Http\Request;

class MerchantAuthenticationController extends Controller
{
    //

    function __construct(
        protected MerchantAuthenticationInterface $merchantAuthenticationRepository
    )
    {

    }

     /**
     * Fetch Merchant profile
     */
    public function fetchMerchant(Request $request)
    {
        $merchant = $this->merchantAuthenticationRepository->getMerchant();
        if (!$merchant) {
            respondError(404, '01', "Merchant not found");
        }
        return respondSuccess('Merchant fetched successfully', new MerchantAccountResource($merchant));
    }

     /**
     * Initiate merchant password reset
     */
    public function forgotPassword(MerchantForgotPasswordRequest $request)
    {
        $validated_data = $request->validated();
        $initiated = $this->merchantAuthenticationRepository->forgotPassword($validated_data['business_email']);
        if (!$initiated['status']) {
            return respondError($initiated['code'], '01', $initiated['message']);
        }
        return respondSuccess($initiated['message'], $initiated['data']);
    }

     /**
     * Complete merchant password reset
     */
    public function resetPassword(MerchantResetPasswordRequest $request)
    {
        $validated_data = $request->validated();
        $updated = $this->merchantAuthenticationRepository->resetPassword($validated_data['code'], $validated_data['business_email'], $validated_data['password']);
        if (!$updated['status']) {
            return respondError($updated['code'], '01', $updated['message']);
        }
        return respondSuccess($updated['message'], $updated['data']);
    }
}
