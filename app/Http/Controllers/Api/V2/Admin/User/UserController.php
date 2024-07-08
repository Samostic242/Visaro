<?php

namespace App\Http\Controllers\Api\V2\Admin\User;

use App\Http\Controllers\Controller;
use App\Interfaces\Repositories\V2\Admin\UserRepositoryInterface;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function __construct(
        protected UserRepositoryInterface $userRepository
    ){}

    public function getUserStatistics()
    {
        $data = $this->userRepository->fetchUserOverview();
        return respondSuccess('User Statistics Fetched Successfully', $data);
    }

    public function getSingleUser($id)
    {
        $data = $this->userRepository->getSingleUser($id);
        return respondSuccess('User Fetched Successfully', $data);
    }
}
