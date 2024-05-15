<?php
namespace App\Interfaces\Repositories\V2\Account\Security;

Interface UserSecurityRepositoryInterface
{
    public function createPin(array $data);

    public function createSecurityQuestion(array $data);

    // public function getSecurityQuestion();
}
