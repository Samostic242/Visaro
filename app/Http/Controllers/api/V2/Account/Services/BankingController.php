<?php

namespace App\Http\Controllers\api\V2\Account\Services;

use App\Http\Controllers\Controller;
use App\Http\Requests\V2\Account\Services\Banking\BankAccountRequest;
use App\Http\Requests\V2\Account\Services\Banking\BankRequest;
use App\Http\Requests\V2\Account\Services\Banking\BeneficiaryRequest;
use App\Http\Resources\V2\Account\Services\Banking\BeneficiaryResource;
use App\Interfaces\Repositories\V2\Account\Services\BankingRepositoryInterface;
use Illuminate\Http\Request;

/**
 * @group Banking
 * @description APIs for Banking Related Functions
 */
class BankingController extends Controller
{
    function __construct(
       protected BankingRepositoryInterface $bankingRepository
    )
    {

    }

    /**
     * Add a Beneficiary to a user Profile
     */
    public function addBeneficiary(BeneficiaryRequest $request)
    {
        $validated_data = $request->validated();
        if(!$created =  $this->bankingRepository->createBeneficiary($validated_data)){
            return \respondError(400, 'Error Creating the beneficiary');
        }
        return \respondSuccess('Beneficiary created succesfully', new BeneficiaryResource($created));

    }

    /**
     * Get all beneficiary associated with a user
     */
    public function allBeneficiaries()
    {
        $beneficiaries = $this->bankingRepository->getBeneficiaries();
        return \respondSuccess('Beneficiary fecthed Successfully', BeneficiaryResource::collection($beneficiaries));
    }

    /**
     * Create a bank
     */
    public function createBank(BankRequest $request)
    {
        $validated_data = $request->validated();
        if(!$created = $this->bankingRepository->createBank($validated_data)){
            return \respondError(400, 'An error occurred while creating the bank.');
        }
        return \respondSuccess('Bank created successfully', $created);
    }

    /**
     * Get all Banks
     */

     public function getBanks()
     {
        $banks = $this->bankingRepository->getBanks();
        return respondSuccess('Banks Returned Successfully', $banks);
     }

     /**
      * Craate  a New Bank Account for the current user
      */
     public function createBankAccount(BankAccountRequest $request)
     {
        $validated_data = $request->validated();
        if(!$created = $this->bankingRepository->createBankAccount($validated_data)){
            return \respondError(400, 'An error occurred while creating a new bank account');
        }
        return \respondSuccess('Bank Account Created Successfully', $created);
     }

     /**
      * Fetches a bank account
      */

      public function fecthBankAccount(){
        if(!$bankAccount = $this->bankingRepository->getBanks()){
            return \respondError(400,'You have not added a bank account yet');
        }
        return respondSuccess('Bank Account Fecthed Successfully', $bankAccount);
      }

      /**
       * Deletes a bank account
       */
     public function deleteBankAccount(int $bankAccountId)
     {
        if(!$bankAccount = $this->bankingRepository->findBankAccountById($bankAccountId)){
            return respondError(404, 'Bank account not found');
        }
        if(!$deleted = $this->bankingRepository->deleteBankAccount($bankAccountId)){
            return \respondError(400, 'An error occurred while deleting');
        }
        return respondSuccess('Bank account deleted successfully');

     }


}
