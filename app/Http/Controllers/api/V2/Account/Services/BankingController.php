<?php

namespace App\Http\Controllers\api\V2\Account\Services;

use App\Http\Controllers\Controller;
use App\Http\Requests\V2\Account\Services\Banking\BeneficiaryRequest;
use App\Http\Resources\V2\Account\Services\Banking\BeneficiaryResource;
use App\Interfaces\Repositories\V2\Account\Services\BankingRepositoryInterface;
use Illuminate\Http\Request;

class BankingController extends Controller
{
    function __construct(
       protected BankingRepositoryInterface $bankingRepository
    )
    {

    }

    public function addBeneficiary(BeneficiaryRequest $request)
    {
        $validated_data = $request->validated();
        if(!$created =  $this->bankingRepository->createBeneficiary($validated_data)){
            return \respondError('400', 'Error Creating the beneficiary');
        }
        return \respondSuccess('Beneficiary created succesfully', new BeneficiaryResource($created));

    }

    public function allBeneficiaries()
    {
        $beneficiaries = $this->bankingRepository->getBeneficiaries();
        return \respondSuccess('Beneficiary fecthed Successfully', BeneficiaryResource::collection($beneficiaries));
    }

}
