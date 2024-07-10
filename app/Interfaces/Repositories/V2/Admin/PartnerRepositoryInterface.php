<?php

namespace App\Interfaces\Repositories\V2\Admin;

interface PartnerRepositoryInterface
{
    public function create(array $data);

    public function login(array $data);
}
