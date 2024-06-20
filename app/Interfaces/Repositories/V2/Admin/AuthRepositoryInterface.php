<?php

namespace App\Interfaces\Repositories\V2\Admin;

interface AuthRepositoryInterface {
    public function create(array $data);

    public function login(array $data);

    public function fetchOverview();
}
