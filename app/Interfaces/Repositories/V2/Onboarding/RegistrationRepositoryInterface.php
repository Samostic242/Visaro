<?php

namespace App\Interfaces\Repositories\V2\Onboarding;

interface RegistrationRepositoryInterface
{
    public function create(array $data);
    public function getCode(array $data);
    public function updateUser(string $id, array $data);
}
