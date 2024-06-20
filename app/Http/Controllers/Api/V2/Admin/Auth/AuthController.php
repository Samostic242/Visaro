<?php

namespace App\Http\Controllers\Api\V2\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\V2\Admin\Auth\AdminLoginRequest;
use App\Http\Requests\V2\Admin\Auth\CreateAdminRequest;
use App\Interfaces\Repositories\V2\Admin\AuthRepositoryInterface;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    function __construct(
        protected AuthRepositoryInterface $authRepository
    ){}

    public function create(CreateAdminRequest $request)
    {
        $data = $request->validated();
        if(!$admin = $this->authRepository->create($data)){
            return respondError(400, '01', 'An error occurred while creating the admin');
        }
        return respondSuccess('Admin Created Successfully', $admin);
    }

    public function login(AdminLoginRequest $request)
    {
        $data = $request->validated();
        $logged_in = $this->authRepository->login($data);
        if (!$logged_in['status']){
            return respondError($logged_in['code'], '01', $logged_in['message']);
        }
        return respondSuccess($logged_in['message'], $logged_in['data']);
    }

    public function fetchOverview()
    {
        $data = $this->authRepository->fetchOverview();
        return respondSuccess('Admin Fetched Successfully', $data);
    }

}
