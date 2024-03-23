<?php
namespace App\Interfaces\Repositories\V2\Merchant\Auth;

Interface MerchantAuthenticationInterface
{
   public function forgotPassword(string $email);
   public function resetPassword(string $code, string $email, string $password);

   public function getMerchant();

}
