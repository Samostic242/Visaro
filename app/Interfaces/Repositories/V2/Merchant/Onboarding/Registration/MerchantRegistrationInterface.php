<?php
namespace App\Interfaces\Repositories\V2\Merchant\Onboarding\Registration;

Interface MerchantRegistrationInterface
{
   public function create(array $data);
   public function update(string $id, array $data);

   public function getMerchantOtp(array $data);

}
