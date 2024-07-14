<?php

namespace App\Repositories\V2\Admin;

use App\Enums\Loans\LoanStatus;
use App\Interfaces\Repositories\V2\Admin\PartnerRepositoryInterface;
use App\Mail\V2\Loan\ApprovedLoanMail;
use App\Mail\V2\Partner\PartnerMail;
use App\Models\Partner;
use App\Models\QuickLoan;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class PartnerRepository implements PartnerRepositoryInterface
{
    public function create(array $data)
    {

        $partner = new Partner();
        $partner->public_id = uuid();
        $partner->email = $data['email'] ?? null;
        $partner->name = $data['name'] ?? null;
        $partner->save();

        $password = generateRandomPassword(8);
        $partner->password = Hash::make($password);
        $partner->save();

        // Send email
        $sendmail = Mail::send(new PartnerMail($partner->email, $partner->name, $password));
        return $partner;

    }

    public function login(array $data)
    {
        try {
            auth()->shouldUse('partner');
            if (!$token = Auth::guard('partner')->attempt(['email' => $data['email'], 'password' => $data['password']])) {
                return [
                    'status' => false,
                    'message' => 'Incorrect username or password',
                    'code' => 401,
                    'data' => null
                ];
            }
            if (!auth()->user()->active) {
                return [
                    'status' => false,
                    'message' => 'Your account is not active kindly reach out to our super admin to re-activate',
                    'code' => 400,
                    'data' => null
                ];
            }
            return [
                'status' => true,
                'message' => 'Partner Logged in successfully',
                'code' => 200,
                'data' => [
                    'token' => $token,
                    'user' => auth()->user()
                ]
            ];
        } catch (Exception $exception) {
            return [
                'status' => false,
                'message' => $exception->getMessage(),
                'code' => 400,
                'data' => null
            ];
        }

    }

    public function updatePartnerData(array $data)
    {
        $partner = auth()->user();
        $partner->name = $data['name'] ?? $partner->name ?? null;
        $partner->email = $data['email'] ?? $partner->email ?? null;
        $partner->phone = $data['phone'] ?? $partner->phone ?? null;
        $partner->interest_rate = $data['interest_rate'] ?? $partner->interest_rate ?? null;
        $partner->address = $data['address'] ?? $partner->address ?? null;
        $partner->password = Hash::make($data['password'] ?? $partner->password ?? null);
        $partner->save();
        return $partner;
    }

    public function getAllLoanRequest()
    {
        $partner_id = auth()->user()->id;
        $loan_requests = QuickLoan::where('partner_id', $partner_id)->with('user')->get();
        return $loan_requests;
    }

    public function loanAction(array $data)
    {
        $loan_id = $data['loan_id'];
        $loan = QuickLoan::where('id', $loan_id)
        ->where('partner_id', auth()->user()->id)->first();
        if(!$loan){
            return respondError(404, "01", 'Loan Not Found');
        }
        $action = strtolower($data['action']);
        if($action == LoanStatus::APPROVED){
            $loan->status = LoanStatus::APPROVED;
            $loan->save();
            $user = User::find($loan->user_id);
            // Send email
            $notification = Mail::send(new ApprovedLoanMail($loan, $user));
            return respondSuccess('Loan Approved Successfully');
        }elseif($action == LoanStatus::DECLINED){
            $loan->status = LoanStatus::DECLINED;
            $loan->reason = $data['reason'] ?? null;
            $loan->save();
            return respondSuccess('Loan Declined Successfully');
        }


    }

    public function dashboardStatistics()
    {
        $allLoanCount = QuickLoan::all()->count();
        $approvedLoans = QuickLoan::whereStatus('approved')->count();
        $declinedLoans = QuickLoan::whereStatus('declined')->count();
        $pendingLoans = QuickLoan::whereStatus('pending')->count();

        $allLoanSum = QuickLoan::all()->sum('loan_amount');
        $approvedLoanSum = QuickLoan::whereStatus('approved')->sum('loan_amount');
        $declineLoanSum = QuickLoan::whereStatus('declined')->sum('loan_amount');
        $pendingLoanSum = QuickLoan::whereStatus('pending')->sum('loan_amount');
        $interest = QuickLoan::whereStatus('approved')->sum('calculated_interest');


        $data = [
            'AllLoanCount' => $allLoanCount,
            'ApprovedLoanCount' => $approvedLoans,
            'DeclinedLoanCount' => $declinedLoans,
            'PendingLoanCount' => $pendingLoans,
            'AllLoanSum' => $allLoanSum,
            'ApprovedLoanSum' => $approvedLoanSum,
            'DeclineLoanSum' => $declineLoanSum,
            'PendingLoanSum' => $pendingLoanSum,
            'OpeningBalance' => 0,
            'ClosingBalance' => 0,
            'TotalInterestGenerated' => $interest

        ];

        return $data;
    }


}

