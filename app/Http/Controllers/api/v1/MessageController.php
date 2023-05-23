<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\MessageService;
use Auth;
use DB;
use App\Models\User;

class MessageController extends Controller
{
    private $messageService;

    public function __construct(MessageService $messageService)
    {
        $this->messageService = $messageService;
    }

    public function create_password(Request $request)
    {

    }

    public function profile_update(Request $request)
    {

    }

    public function company_profile_update(Request $request)
    {

    }



    public function list_otp_types()
    {
        $otp_collections = DB::table('otp_types')->get();

        return response()->json([
            'success'=>true,
            'message'=>'Successful',
            'data'=>$otp_collections
        ], 202);
    }

    public function country_list()
    {
        $country_collections = DB::table('country')->orderBy('country_key','asc')->get();

        return response()->json([
            'success'=>true,
            'message'=>'Successful',
            'data'=>$country_collections
        ], 202);
    }

    public function region_list($country_key)
    {
        //check if country exist
        $country_count = DB::table('country')->where('country_key',$country_key)->count();

        if ($country_count > 0)
        {
            $country_collections = DB::table('region')->select('id','description')->where('country_key',$country_key)->orderBy('description','asc')->get();

            return response()->json([
                'success'=>true,
                'message'=>'Successful',
                'data'=>$country_collections
            ], 202);
        }else
        {
            return response()->json([
                'success'=>false,
                'message'=>'Invalid Country Key',
              ], 406);
        }

    }

    public function resend_otp($otp_type)
    {
         $count = DB::table('otp_types')->where('id', $otp_type)->count();

         if($count > 0)
         {

            $otp = rand(1000,9000);
            $user_id = Auth::user()->id;

            $date = date('Y-m-d H:i:s');
            $currentDate = strtotime($date);
            $futureDate = $currentDate+(60*2); //Add 2 minute to the current date
            $expiry = date("Y-m-d H:i:s", $futureDate);

            $update["otp_code"] = $otp;
            $update["otp_type"] = $otp_type;
            $update["otp_created_at"] = $date;
            $update["otp_expiry_time"] = $expiry;

            $sent_to = "";

            if($otp_type == 1) //Login Verification
            {
                $update['otp_login_verif'] = 0;
                $sent_to = Auth::user()->email;
            }else if($otp_type == 2) //Forgot Password Verification
            {
                $update['otp_forgot_pass_verif'] = 0;
                $sent_to = Auth::user()->email;
            }else if($otp_type == 3) //Phone No Verification
            {
                $update['otp_phone_verif'] = 0;
                $sent_to = Auth::user()->phone;
            }




            //Flag OTP as used
            User::where('id', auth()->user()->id)
            ->update($update);

            return response()->json([
                'success'=>true,
                'message'=>'OTP has been sent to '.$sent_to,

            ], 200);




         }else
         {
            return response()->json([
                'success'=>false,
                'message'=>'Invalid OTP Type',
              ], 406);
         }
    }

    //
    public function validate_otp(Request $request)
    {

        //This will be moved to the message micro services
        $otp = $request->otp_code;
        $user_id = Auth::user()->id;

        $otp_collection = DB::table('users')
        ->where('otp_code', $otp)
        ->where('id', $user_id)
        ->get();

        if(count($otp_collection) >0 )
        {
            if($otp_collection[0]->otp_expiry_time < date('Y-m-d H:i:s'))
            {
                //OTP has expired - Invalid
                return response()->json([
                    'success'=>true,
                    'message'=>'OTP has expired',

                ], 200);

            }else
            {

                $update["otp_code"] = "";
                $update["otp_login_verif"] = 0;
                $update["otp_created_at"] = NULL;
                $update["otp_expiry_time"] = NULL;

                if($otp_collection[0]->otp_type == 1) //Login Verification
                {
                    $update['otp_login_verif'] = 1;
                }else if($otp_collection[0]->otp_type == 2) //Forgot Password Verification
                {
                    $update['otp_forgot_pass_verif'] = 1;
                }else if($otp_collection[0]->otp_type == 3) //Phone No Verification
                {
                    $update['otp_phone_verif'] = 1;
                }

                //Flag OTP as used
                User::where('id', auth()->user()->id)
                ->update($update);

                return response()->json([
                    'success'=>true,
                    'message'=>'OTP is valid',

                ], 200);

            }

        }else
        {
               //OTP record not found - Invalid

               return response()->json([
                'success'=>false,
                'message'=>'OTP is invalid',

              ], 406);
        }




         exit;

        return $this->successResponse($this->messageService->validate_otp($request->all()));
    }
}
