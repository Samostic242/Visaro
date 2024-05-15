<?php

namespace App\Http\Controllers\Api\V2\Account\Services;

use App\Http\Controllers\Controller;
use App\Http\Requests\V2\Account\Services\Banking\AccountDetailsRequest;
use App\Http\Requests\V2\Account\Services\Banking\BankAccountRequest;
use App\Http\Requests\V2\Account\Services\Banking\BankRequest;
use App\Http\Requests\V2\Account\Services\Banking\BeneficiaryRequest;
use App\Http\Resources\V2\Account\Services\Banking\BeneficiaryResource;
use App\Interfaces\Repositories\V2\Account\Services\BankingRepositoryInterface;

/**
 * @group Banks
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
     * Add new Beneficiary
     */
    public function addBeneficiary(BeneficiaryRequest $request)
    {
        $validated_data = $request->validated();
        $validate_pin = validatePin($validated_data['pin'], auth()->id());
        // return $validate_pin;
        if($validate_pin['status'] == false){
            return respondError(401, '01', $validate_pin['message']);

        }else{
        if (!$created = $this->bankingRepository->createBeneficiary($validated_data)) {
            return respondError(400, '01', 'Error Creating the beneficiary');
        }
        return respondSuccess('Beneficiary created succesfully', new BeneficiaryResource($created));

    }
}

    /**
     * Get all beneficiaries
     */
    public function allBeneficiaries()
    {
        $beneficiaries = $this->bankingRepository->getBeneficiaries();
        return \respondSuccess('Beneficiary fetched Successfully', BeneficiaryResource::collection($beneficiaries));
    }

    /**
     * Add new Bank
     */
    public function createBank(BankRequest $request)
    {
        $validated_data = $request->validated();
        if (!$created = $this->bankingRepository->createBank($validated_data)) {
            return respondError(400, '01', 'An error occurred while creating the bank.');
        }
        return respondSuccess('Bank created successfully', $created);
    }

    /**
     * Get all bank accounts
     */

    public function getBanks()
    {
        $banks = $this->bankingRepository->getBanks();
        return respondSuccess('Banks Returned Successfully', $banks);
    }

    /**
     * Add new Bank Account for user
     */
    public function createBankAccount(BankAccountRequest $request)
    {
        $validated_data = $request->validated();
        if (!$created = $this->bankingRepository->createBankAccount($validated_data)) {
            return respondError(400, '01', 'An error occurred while creating a new bank account');
        }
        return respondSuccess('Bank Account Created Successfully', $created);
    }

    /**
     * Fetches a bank account
     */

    public function fetchBankAccount()
    {
        if (!$bankAccount = $this->bankingRepository->getBanks()) {
            return respondError(400, '01', 'You have not added a bank account yet');
        }
        return respondSuccess('Bank Account Fecthed Successfully', $bankAccount);
    }

    /**
     * Deletes a bank account
     */
    public function deleteBankAccount(int $bankAccountId)
    {
        if (!$bankAccount = $this->bankingRepository->findBankAccountById($bankAccountId)) {
            return respondError(404, '01', 'Bank account not found');
        }
        if (!$deleted = $this->bankingRepository->deleteBankAccount($bankAccountId)) {
            return respondError(400, '01', 'An error occurred while deleting');
        }
        return respondSuccess('Bank account deleted successfully');

    }

    /**
     * Fecth Visaro User Account Details by Code
     */
    public function fetchAccountDetails(AccountDetailsRequest $request)
    {
        $validated_data = $request->validated();
        return $this->bankingRepository->fecthAccountDetails($validated_data);
    }
}
