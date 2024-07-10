<?php

namespace App\Http\Controllers\Api\V2\Partner;

use App\Http\Controllers\Controller;
use App\Http\Requests\V2\Partner\CreatePartnerRequest;
use App\Http\Requests\V2\Partner\PartnerLoginRequest;
use App\Interfaces\Repositories\V2\Admin\PartnerRepositoryInterface;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    //
    function __construct(
        protected PartnerRepositoryInterface $partnerRepository
    ){}

    public function create(CreatePartnerRequest $request)
    {
        $validated_data = $request->validated();
        if(!$partner = $this->partnerRepository->create($validated_data))
        {
            return respondError(400, '01', 'An Error Occurred');
        }
        return respondSuccess('Partner Created Successfully', $partner);
    }

    public function login(PartnerLoginRequest $request)
    {
        $data = $request->validated();
        $logged_in = $this->partnerRepository->login($data);
        if (!$logged_in['status']){
            return respondError($logged_in['code'], '01', $logged_in['message']);
        }
        return respondSuccess($logged_in['message'], $logged_in['data']);
    }

}
