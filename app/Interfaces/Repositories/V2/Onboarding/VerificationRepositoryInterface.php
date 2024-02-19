<?php

namespace App\Interfaces\Repositories\V2\Onboarding;

interface VerificationRepositoryInterface
{
    public function getOtp(array $data);
    public function verifyEmail(array $data);
}
