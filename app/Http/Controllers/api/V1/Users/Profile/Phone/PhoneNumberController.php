<?php

namespace App\Http\Controllers\api\V1\Users\Profile\Phone;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Utilities;
use App\Http\Requests\V1\Users\Profile\Phone\InitiatePhoneNumberVerificationRequest;
use App\Http\Requests\V1\Users\Profile\Phone\VerifyPhoneNumberOtpRequest;
use App\Models\User;
use App\Services\MessageService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class PhoneNumberController extends Controller
{
    public function __construct(protected MessageService $messageService)
    {
    }

    /**
     ******************************************************************************************************************************
     * @OA\Post(
     * path="/profile/phone/verification/initiate",
     * summary="Initiate Phone number verification",
     * description="Initiate Phone number verification",
     * operationId="phone.verification.initiate",
     * tags={"Initiate Phone number verification"},
     * security={{"bearer_token":{}}},
     * @OA\RequestBody(
     *    required=true,
     *    description="Request body",
     *    @OA\JsonContent(
     *       required={"phone_code","phone_number"},
     *       @OA\Property(property="phone_code", type="string", example="+234"),
     *       @OA\Property(property="phone_number", type="string", example="8069449097")
     *    ),
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Token sent to phone number",
     *    @OA\JsonContent(
     *       @OA\Property(property="success", type="boolean", example="true"),
     *       @OA\Property(property="message", type="string", example="Token sent to phone number"),
     *       @OA\Property(property="data",
     *          type="object",
     *                example={
     *                     "code_id":"9a78d1b6-2350-43d4-9253-18df4948bb3c",
     *                     "code":"1234",
     *                },
     *              ),
     *       )
     *     )
     * )
     * ********/

    public function initiateVerifyUserPhoneNumber(InitiatePhoneNumberVerificationRequest $request)
    {

        $user = User::find(Auth::user()->id);
        $phone_code = $user->phone_country_code ?? $request->phone_code;
        $phone_number = $request->phone_number;
        $preped_phone_number = $phone_code . substr(rtrim($phone_number), -10);

        if ($send_token = sendSmsToken($preped_phone_number, 'compliance')) {
            $user->phone_country_code = $phone_code;
            $user->phone = $phone_number;
            $user->save();
            return respondSuccess("Token sent to {$preped_phone_number}", $send_token);
        }
        return respondError('01', "Error sending code to {$preped_phone_number}");
    }

    public function completeVerifyUserPhoneNumber(VerifyPhoneNumberOtpRequest $request)
    {
        $user = User::find(Auth::user()->id);
        $phone_code = $user->phone_country_code ?? $request->phone_code;
        $phone_number = $user->phone ?? $request->phone_number;
        $preped_phone_number = $phone_code . substr(rtrim($phone_number), -10);

        if ($send_token = sendSmsToken($preped_phone_number, 'compliance')) {
            $user->phone_country_code = $phone_code;
            $user->phone = $phone_number;
            $user->save();
            respondSuccess("Token sent to {$preped_phone_number}", $send_token);
        }
        respondError('01', "Error sending code to {$preped_phone_number}", $send_token);
    }


    public function resend_otp($otp_type)
    {
        $count = DB::table('otp_types')->where('id', $otp_type)->count();

        if ($count > 0) {

            $otp = rand(1000, 9000);
            $user_id = Auth::user()->id;
            $otp_expiry_min = 10;
            $date = date('Y-m-d H:i:s');
            $currentDate = strtotime($date);
            $futureDate = $currentDate + (60 * $otp_expiry_min); //Add 10 minute to the current date
            $expiry = date("Y-m-d H:i:s", $futureDate);

            $update["otp_code"] = $otp;
            $update["otp_type"] = $otp_type;
            $update["otp_created_at"] = $date;
            $update["otp_expiry_time"] = $expiry;

            $sent_to = "";

            if ($otp_type == 1) //Login Verification
            {
                $update['otp_login_verif'] = 0;

                $sent_to = Auth::user()->email;

                $link = "https://visaro.ng"; //verify email link
                $data = array(
                    'full_name' => auth()->user()->firstname . " " . auth()->user()->lastname,
                    'link' => $link,
                    'otp' => $otp,
                    'title' => 'Verify your account',
                    'email_content' => 'Please use the OTP below to verify your account',
                    'otp_expiry_min' => $otp_expiry_min

                );
                try {
                    Mail::send('emails.otp', $data, function ($message) use ($data) {
                        $message->from("noreply@visarong.com", 'Visaro Nigeria');
                        $message->to(auth()->user()->email);
                        $message->subject('OTP Request');
                    });
                } catch (\Exception $e) {
                    // Get error here
                }
            } else if ($otp_type == 2) //Forgot Password Verification
            {
                $update['otp_forgot_pass_verif'] = 0;

                $sent_to = Auth::user()->email;


                $link = "https://visaro.ng"; //verify email link
                $data = array(
                    'full_name' => auth()->user()->firstname . " " . auth()->user()->lastname,
                    'link' => $link,
                    'otp' => $otp,
                    'title' => 'Verify your forgot password',
                    'email_content' => 'Please use the OTP below to verify your forgot password',
                    'otp_expiry_min' => $otp_expiry_min

                );

                try {
                    Mail::send('emails.otp', $data, function ($message) use ($data) {
                        $message->from("noreply@visarong.com", 'Visaro Nigeria');
                        $message->to(auth()->user()->email);
                        $message->subject('OTP Request');
                    });
                } catch (\Exception $e) {
                    // Get error here
                }
            } else if ($otp_type == 3) //Phone No Verification
            {
                $update['otp_phone_verif'] = 0;

                $sent_to = Auth::user()->phone;
            } else if ($otp_type == 4) //Transaction Pin
            {

                $update['otp_trans_pin_flag'] = 0;
                $sent_to = Auth::user()->email;


                $link = "https://visaro.ng"; //verify email link
                $data = array(
                    'full_name' => auth()->user()->firstname . " " . auth()->user()->lastname,
                    'link' => $link,
                    'otp' => $otp,
                    'title' => 'Verify your change transaction pin',
                    'email_content' => 'Please use the OTP below to create a new transaction pin',
                    'otp_expiry_min' => $otp_expiry_min

                );

                try {
                    Mail::send('emails.otp', $data, function ($message) use ($data) {
                        $message->from("noreply@visarong.com", 'Visaro Nigeria');
                        $message->to(auth()->user()->email);
                        $message->subject('OTP Request');
                    });
                } catch (\Exception $e) {
                    // Get error here
                }
            }


            //Flag OTP as used
            User::where('id', auth()->user()->id)
                ->update($update);

            return response()->json([
                'success' => true,
                'message' => 'OTP has been sent to ' . $sent_to,

            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Invalid OTP Type',
            ], 406);
        }
    }


    public function validate_otp(Request $request)
    {

        //This will be moved to the message micro services
        $otp = $request->otp_code;
        $user_id = Auth::user()->id;

        $otp_collection = DB::table('users')
            ->where('otp_code', $otp)
            ->where('id', $user_id)
            ->get();

        if (count($otp_collection) > 0) {
            if ($otp_collection[0]->otp_expiry_time < date('Y-m-d H:i:s')) {
                //OTP has expired - Invalid
                return response()->json([
                    'success' => true,
                    'message' => 'OTP has expired',

                ], 406);
            } else {

                $update["otp_code"] = "";
                //$update["otp_login_verif"] = 0;
                $update["otp_created_at"] = NULL;
                $update["otp_expiry_time"] = NULL;

                $otp_screen_expiry_time = 1;
                $date = date('Y-m-d H:i:s');
                $currentDate = strtotime($date);
                $futureDate = $currentDate + (60 * $otp_screen_expiry_time); //Add 1 minute to the current date

                $expiry = date("Y-m-d H:i:s", $futureDate); //When OTP validation is successful, users must change password, pin etc before the grace period elapses

                if ($otp_collection[0]->otp_type == 1) //Login Verification
                {
                    Utilities::log_this_activity("Login was successful");

                    $update['otp_login_verif'] = 1;
                    $update['otp_login_grace'] = $expiry;
                } else if ($otp_collection[0]->otp_type == 2) //Forgot Password Verification
                {

                    $update['otp_forgot_pass_verif'] = 1;
                    $update['otp_forgot_grace'] = $expiry;
                } else if ($otp_collection[0]->otp_type == 3) //Phone No Verification
                {
                    Utilities::log_this_activity("Phone Verification was successful");

                    $update['otp_phone_verif'] = 1;
                    $update['otp_phone_grace'] = $expiry;
                } else if ($otp_collection[0]->otp_type == 4) //Change transaction Pin Profiling
                {

                    $update['otp_trans_pin_flag'] = 1; //You have been granted access to change pin
                    $update['otp_trans_pin_grace'] = $expiry;
                }

                //Flag OTP as used
                User::where('id', auth()->user()->id)
                    ->update($update);

                return response()->json([
                    'success' => true,
                    'message' => 'OTP is valid',

                ], 200);
            }
        } else {
            //OTP record not found - Invalid
            return response()->json([
                'success' => false,
                'message' => 'OTP is invalid',

            ], 406);
        }
        exit;

        return $this->successResponse($this->messageService->validate_otp($request->all()));
    }
}
