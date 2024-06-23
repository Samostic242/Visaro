<?php

namespace App\Http\Controllers\Api\V2\Admin\Support;

use App\Http\Controllers\Controller;
use App\Interfaces\Repositories\V2\Admin\SupportRepositoryInterface;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    function __construct(
        protected SupportRepositoryInterface $supportRepository
    ){}

    public function getAllSupport()
    {
        $data = $this->supportRepository->getAll();
        return respondSuccess('Support Fetched Successfully', $data);
    }
}
