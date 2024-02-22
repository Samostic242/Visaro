<?php

namespace App\Interfaces\Repositories\V2\Auth;

interface AuthenticationRepositoryInterface
{
    public function login(array $data);
    public function getUser();
    public function forgotPassword(array $data);
}
