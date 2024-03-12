<?php

namespace App\Interfaces\Services\V2\Auth;

interface UserAuthServiceInterface
{
    public function login(string $username, string $password);

    public function getUser();

    public function forgotPassword(string $email);
}
