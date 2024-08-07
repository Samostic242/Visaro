<?php

namespace App\Repositories\V2\Account\Services;

use App\Interfaces\Repositories\V2\Account\Services\BankingRepositoryInterface;
use App\Models\Bank;
use App\Models\BankAccount;
use App\Models\Beneficiary;
use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Auth;


class BankingRepository implements BankingRepositoryInterface
{
    public function findBankAccountById(string $id)
    {
        return BankAccount::find($id);
    }

    public function findBankAccountDetailsByCode(string $code)
    {
        try{
        $recipient_details = User::where('code', $code)->select('firstname', 'lastname')->first();
        if(!$recipient_details)
        {
            return ['status'=>404, "message"=> "Data not Found", 'data'=> null];
        }
        return ['status'=>200, "message"=> "Data Fetched Successfuly", 'data'=> $recipient_details];
        }
        catch(QueryException $e)
        {
        return ['status'=>400, "message"=> "Operation failed to complete", 'data'=> null];
        }
    }

    public function createBeneficiary(array $data)
    {
        $beneficiary = new Beneficiary();

        $beneficiary->public_id = \uuid() ?? null;
        $beneficiary->user_id = auth()->id();
        $beneficiary->account_name = $data['account_name'] ?? null;
        $beneficiary->account_number = $data['account_number'] ?? null;
        $beneficiary->bank_name = $data['bank_name'] ?? null;
        $beneficiary->save();
        return $beneficiary;
    }


    public function getBeneficiaries()
    {
        $user = auth()->user();
        return $user->beneficiaries;
    }

    public function createBank(array $data)
    {
        $bank = new Bank();
        $bank->public_id = \uuid() ?? null;
        $bank->name = $data['name'] ?? null;
        $bank->code = $data['code'] ?? null;
        $bank->logo = upload_to_cloudinary('Banks', $data['logo']->getRealPath()) ?? null;
        $bank->acronym = $data['acronym'] ?? null;
        $bank->save();
        return $bank;
    }

    public function getBanks()
    {
        return Bank::all();
    }

    public function createBankAccount(array $data)
    {
        $bankAccount = new BankAccount();
        $bankAccount->public_id = uuid() ?? null;
        $bankAccount->owner_id = auth()->id();
        $bankAccount->owner = auth()->user()->firstname;
        $bankAccount->account_name = $data['account_name'] ?? null;
        $bankAccount->account_number = $data['account_number'] ?? null;
        $bankAccount->bank_name = $data['bank_name'] ?? null;
        $bankAccount->bank_code = $data['bank_code'] ?? null;
        $bankAccount->save();
        return $bankAccount;
    }

    public function getBankAccount()
    {
        $user = auth()->user();
        return $user->bankAccount;
    }

    public function updateBankAccount(string $id, array $data)
    {
        $bankAccount = $this->findBankAccountById($id);
        if(!$bankAccount){
            return false;
        }
        $bankAccount->account_name = $data['account_name'] ?? $bankAccount->account_name;
        $bankAccount->account_number = $data['account_number'] ?? $bankAccount->account_number;
        $bankAccount->bank_name = $data['bank_name'] ?? $bankAccount->bank_name;
        $bankAccount->bank_code = $data['bank_code'] ?? $bankAccount->bank_code;
        $bankAccount->save();
        return $bankAccount;
    }

    public function deleteBankAccount(string $id)
    {
        return BankAccount::destroy($id);
    }

    public function fecthAccountDetails(array $data)
    {
        $accountDetails = $this->findBankAccountDetailsByCode($data['code']);
        if($accountDetails['status'] == 400)
        {
            return respondError(400, '01', $accountDetails['message']);
        }elseif($accountDetails['status'] == 404){
            return respondError(404, '01', $accountDetails['message']);
        }else{
            return respondSuccess($accountDetails['message'], $accountDetails['data']);
        }
 }
}
