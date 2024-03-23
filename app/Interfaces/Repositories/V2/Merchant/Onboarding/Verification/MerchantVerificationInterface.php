<?php
namespace App\Interfaces\Repositories\V2\Merchant\Onboarding\Verification;
// namespace App\Interfaces\Repositories\V2\Merchant\Onboarding\Registration;


Interface MerchantVerificationInterface
{
   public function verifyEmail(array $data);
}
