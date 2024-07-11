<?php

namespace App\Interfaces\Repositories\V2\Admin;

interface PartnerRepositoryInterface
{
    public function create(array $data);

    public function login(array $data);

    public function getAllLoanRequest();

    public function loanAction(array $data);

    public function updatePartnerData(array $data)
;


}
