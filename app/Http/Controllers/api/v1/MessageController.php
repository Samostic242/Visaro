<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\MessageService;
use Auth;
use DB;
use App\Models\User;
use Mail;
use DateTime;
use Hash;
use App\Http\Controllers\Utilities;

class MessageController extends Controller
{
    private $messageService;

    public function __construct(MessageService $messageService)
    {
        $this->messageService = $messageService;
    }

    public function create_password(Request $request)
    {

        $password = $request->password;
        $password_confirmation = $request->password_confirmation;

        if($password != $password_confirmation)
        {


            return response()->json([
                'success'=>false,
                'message'=>'This email address is not associated with any account on visaro',
            ], 406);
        }else
        {

              $user_details =  DB::table('users')->where('id', Auth::user()->id)->get();

              if($user_details[0]->otp_forgot_pass_verif ==1 && new DateTime(date('Y-m-d H:i:s')) < new DateTime($user_details[0]->otp_forgot_grace))
              {

                $user = User::find(Auth::user()->id);
                $user->otp_forgot_grace = NOW();
                $user->password = Hash::make($password);
                $user->save();

                Utilities::log_this_activity("Your password has been changed");

                return response()->json([
                    'success'=>true,
                    'message'=>'Password was successfully changed',
                ], 200);

              }else
              {
                return response()->json([
                    'success'=>false,
                    'message'=>'This create password session has expired',
                ], 406);
              }
        }

    }

    public function company_profile_update(Request $request)
    {

       $rules = [
          "certificate_of_incoporation" => "sometimes|mimes:pdf|max:2048",
          "memart" => "sometimes|mimes:pdf|max:2048",
          "acfta_certificate" => "sometimes|mimes:pdf|max:2048",
          "business_name" => "required",
          "business_address" => "required",
          "business_email" => "required",
          "country_of_origin" => "required",
          "port_of_origin" => "required",
       ];

       $this->validate($request, $rules);
       $check =  DB::table('profile')->where('user_id', Auth::user()->id)->get();

       if(count($check) > 0)
       {
            if (isset($request->account_type) && $request->account_type != 2)
            {
                return response()->json([
                    'success' => false,
                    'message' => 'Invalid account type for a company account',

                ], 406);
            }

            if($check[0]->account_type =="")//Account Type can only be updated once on profile update
            {
                $insert["account_type"] = $request->account_type;
            }

            if ($request->hasFile('memart'))
            {
                $file = $request->file('memart');
                $extension = $request->file('memart')->getClientOriginalExtension();
                $filename = Auth::user()->id.'_'.Auth::user()->email . '_memart.' . $extension; // renameing image
                $destinationPath = 'uploads/company_doc/';//its refers project/public/uploads/jsa directory
                //$work_permit_log->jsa_upload = $filename;
                $upload_success = $file->move($destinationPath, $filename);
                $insert["memart"] = $filename;
            }

            if ($request->hasFile('acfta_certificate'))
            {
                $file = $request->file('acfta_certificate');
                $extension = $request->file('acfta_certificate')->getClientOriginalExtension();
                $filename = Auth::user()->id.'_'.Auth::user()->email . '_acfta_certificate.' . $extension; // renameing image
                $destinationPath = 'uploads/company_doc/';//its refers project/public/uploads/jsa directory
                //$work_permit_log->jsa_upload = $filename;
                $upload_success = $file->move($destinationPath, $filename);
                $insert["acfta_certificate"] = $filename;
            }

            if ($request->hasFile('certificate_of_incoporation'))
            {
                $file = $request->file('certificate_of_incoporation');
                $extension = $request->file('certificate_of_incoporation')->getClientOriginalExtension();
                $filename = Auth::user()->id.'_'.Auth::user()->email . '_certificate_of_incoporation.' . $extension; // renameing image
                $destinationPath = 'uploads/company_doc/';//its refers project/public/uploads/jsa directory
                //$work_permit_log->jsa_upload = $filename;
                $upload_success = $file->move($destinationPath, $filename);
                $insert["certificate_of_incoporation"] = $filename;
            }

            $insert["business_name"] = $request->business_address;
            $insert["business_address"] =  $request->business_address;
            $insert["business_email"] = $request->business_email ;
            $insert["country_of_origin"] = $request->country_of_origin ;
            $insert["port_of_origin"] = $request->port_of_origin;

            DB::table('profile')->where('user_id',Auth::user()->id)->update($insert);
       }
    }

    function get_wallet()
    {
         //check if wallet has been created for this user
         $wallet_check = DB::table('wallet')->where('owners_id', Auth::user()->id)->get();
         if(count($wallet_check) > 0)
         {
            return $wallet_check;
         }else
         {
            Utilities::log_this_activity("Your wallet was created successfully");

            //create new wallet for this user
            DB::table('wallet')->insert([
                "owners_id" => Auth::user()->id,
                "created_at" => NOW(),
                "created_by" => Auth::user()->id,
                "status" => 1, //active
            ]);
            return DB::table('wallet')->where('owners_id', Auth::user()->id)->get();
         }
    }

    public function username_check($email)
    {

      $check = DB::table('users')->where('email', $email)
      ->leftjoin('profile','profile.user_id','users.id')
      ->get();

      if(count($check) > 0)
      {
          if($check[0]->bvn_first_name !="")
          {
            $data = [
                "full_name" => $check[0]->bvn_first_name." ".$check[0]->bvn_middle_name." ".$check[0]->bvn_last_name
            ];

            return response()->json([
                'success'=>true,
                'message'=>'success',
                'data' => $data
                ], 200);
          }else
          {
            return response()->json([
                'success'=>false,
                'message'=>'Unable to determine beneficiary',
            ], 406);
          }

      }else
      {
        return response()->json([
            'success'=>false,
            'message'=>'Account not found',
        ], 406);
      }

    }

    public function balance_enquiry()
    {
        //check if onboarding is completed by this users
        $check = DB::table('profile')
        ->where('user_id', Auth::user()->id)->get();

        if(count($check) > 0)
        {
              //get wallet balance
              $wallet_collection = $this->get_wallet();

              $wallet = [
                 "visaro_balance" => $wallet_collection[0]->visaro_balance,
                 "visaro_credit" => $wallet_collection[0]->visaro_credit,
                 "status" => $wallet_collection[0]->status == 1?"Active":"Inactive"
              ];

              $data = [
                "wallet" => $wallet
              ];

              return response()->json([
                'success'=>true,
                'message'=>'success',
                'data' => $data
                ], 200);



        }else
        {
            return response()->json([
                'success'=>false,
                'message'=>'Your BVN is not verified',
            ], 406);
        }
    }

    public function profile_details()
    {
        //check if the user BVN Verification has been checked before
        $check_bvn = DB::table('profile as p')
        ->selectRaw('profile_pics_file_name, bvn_first_name, bvn_middle_name, bvn_last_name, bvn_phone_number_1,
        bvn_phone_number_2, bvn_residential_address, bvn_state_of_residence,
        bvn_lga_of_residence, r.description as stateOfResidence, l.description as lgaOfResidence,p.bvn_verified')
        ->whereIn('bvn_verified',[0,1])
        ->where('user_id', Auth::user()->id)
        ->leftjoin('lga as l','l.id','p.bvn_lga_of_residence')
        ->leftjoin('region as r','r.id','p.bvn_state_of_residence')
        ->get();

        $data = array();


        if(count($check_bvn) > 0) //If BVN Verification has been checked before then fetch record from our local DB
        {

            if($check_bvn[0]->bvn_verified == 1)//successful
            {
                $wallet_collection = $this->get_wallet();

                $wallet = [
                    "visaro_balance" => $wallet_collection[0]->visaro_balance,
                    "visaro_credit" => $wallet_collection[0]->visaro_credit,
                    "status" => $wallet_collection[0]->status == 1?"Active":"Inactive"
                ];

                $data = [
                    "first_name" => $check_bvn[0]->bvn_first_name,
                    "middle_name" => $check_bvn[0]->bvn_middle_name,
                    "last_name" => $check_bvn[0]->bvn_last_name,
                    "phone_1" => $check_bvn[0]->bvn_phone_number_1,
                    "phone_2" => $check_bvn[0]->bvn_phone_number_2,
                    "address" => $check_bvn[0]->bvn_residential_address,
                    "state_of_residence" => ["id" =>  (int)$check_bvn[0]->bvn_state_of_residence, "description" => $check_bvn[0]->stateOfResidence],
                    "lga_of_residence" => ["id" => (int)$check_bvn[0]->bvn_lga_of_residence, "description" => $check_bvn[0]->lgaOfResidence],
                    "profile_pics" => url('/uploads/profile_pics/'.$check_bvn[0]->profile_pics_file_name),
                    "wallet" => $wallet
                ];
            }
        }

        return response()->json([
            'success'=>true,
            'message'=>'success',
            'data' => $data
            ], 200);

    }

    public function dashboard()
    {
         //check if onboarding is completed by this users
         $check = DB::table('profile')
         ->where('user_id', Auth::user()->id)->get();

         if(count($check) > 0)
         {
            //Check if BVN is verified
            if($check[0]->bvn_verified == 1)
            {
               //get wallet balance
               $wallet_collection = $this->get_wallet();

               $wallet = [
                  "visaro_balance" => $wallet_collection[0]->visaro_balance,
                  "visaro_credit" => $wallet_collection[0]->visaro_credit,
                  "status" => $wallet_collection[0]->status == 1?"Active":"Inactive"
               ];

               //BNPL Services
               $bnpl_services_collection = DB::table('bnpl_services')->select('bnpl_service_name','thumbnails','display_img')->get(3); //get 3 services

               foreach($bnpl_services_collection as $val)
               {
                  $bnpl_services [] = [
                     "bnpl_service_name" => $val->bnpl_service_name,
                     "thumbnail" => url('/uploads/bnpl_services').'/'.$val->thumbnails,
                     "display_img" => url('/uploads/bnpl_services').'/'.$val->display_img,
                  ];
               }

               //BNPL Services
               $hospital_collection = DB::table('hospitals')->select('hospital_name','thumbnails','display_img')->get(3); //get 3 services

               foreach($hospital_collection as $val)
               {
                  $hospital [] = [
                     "hospital_name" => $val->hospital_name,
                     "thumbnail" => url('/uploads/hospitals').'/'.$val->thumbnails,
                     "display_img" => url('/uploads/hospitals').'/'.$val->display_img,
                  ];
               }

               //get activities log
               $activities = DB::table('activity_log')->select('activity_description', 'created_at')
               ->where('created_by', Auth::user()->id)
               ->orderBy('created_at','desc')->get();

               return response()->json([
                'success'=> true,
                'message'=>'Success',
                'data' =>[
                    "wallet" => $wallet,
                    "bnpl_services" => $bnpl_services,
                    "activities_log" => $activities,
                    "registered_hospital" => $hospital
                ]
            ], 200);


            }else
            {
                return response()->json([
                    'success'=>false,
                    'message'=>'Your BVN is not verified',
                ], 406);
            }

         }else{
            return response()->json([
                'success'=>false,
                'message'=>'Your onboarding process is not completed',
            ], 406);
         }

    }

    public function forgotpassword(Request $request)
    {

       $check = DB::table('users')->where('email', $request->email)->get();

       if (count($check) > 0)
       {
            $otp = rand(1000,9000);
            $otp_expiry_min =  10;
            $date = date('Y-m-d H:i:s');
            $currentDate = strtotime($date);
            $futureDate = $currentDate+(60*$otp_expiry_min); //Add 10 minute to the current date
            $expiry = date("Y-m-d H:i:s", $futureDate);

            $update["otp_code"] = $otp;
            $update["otp_type"] = 2; //Forgot Password
            $update["otp_created_at"] = $date;
            $update["otp_expiry_time"] = $expiry;

            $sent_to = "";


                $update['otp_forgot_pass_verif'] = 0;
                $sent_to = $check[0]->email;


                $link = "https://google.com";//verify email link
                $data = array(
                    'full_name'=>$check[0]->firstname." ".$check[0]->lastname,
                    'link'=> $link,
                    'otp' => $otp,
                    'title' => 'Verify your forgot password',
                    'email_content' => 'Please use the OTP below to verify your forgot password',
                    'otp_expiry_min' => $otp_expiry_min

                );

                try{
                    Mail::send('emails.otp', $data, function($message) use ($data, $check){
                        $message->from("noreply@visarong.com", 'Visaro Nigeria');
                        $message->to($check[0]->email);
                        $message->subject('OTP Request');
                    });
                }catch(\Exception $e){
                // Get error here
            }



            //Flag OTP as used
            User::where('id', $check[0]->id)
            ->update($update);

            return response()->json([
                'success'=>true,
                'message'=>'OTP has been sent to '.$sent_to,

            ], 200);

       }else
       {
            return response()->json([
                'success'=>false,
                'message'=>'This email address is not associated with any account on visaro',
            ], 406);
       }
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
            ], 200);
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
            $otp_expiry_min =  10;
            $date = date('Y-m-d H:i:s');
            $currentDate = strtotime($date);
            $futureDate = $currentDate+(60*$otp_expiry_min); //Add 10 minute to the current date
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

                $link = "https://google.com";//verify email link
                $data = array(
                    'full_name'=>auth()->user()->firstname." ".auth()->user()->lastname,
                    'link'=> $link,
                    'otp' => $otp,
                    'title' => 'Verify your account',
                    'email_content' => 'Please use the OTP below to verify your account',
                    'otp_expiry_min' => $otp_expiry_min

                );
                try{
                    Mail::send('emails.otp', $data, function($message) use ($data){
                        $message->from("noreply@visarong.com", 'Visaro Nigeria');
                        $message->to(auth()->user()->email);
                        $message->subject('OTP Request');
                    });
                }catch(\Exception $e){
                // Get error here
                }

            }else if($otp_type == 2) //Forgot Password Verification
            {
                $update['otp_forgot_pass_verif'] = 0;

                $sent_to = Auth::user()->email;


                $link = "https://google.com";//verify email link
                $data = array(
                    'full_name'=>auth()->user()->firstname." ".auth()->user()->lastname,
                    'link'=> $link,
                    'otp' => $otp,
                    'title' => 'Verify your forgot password',
                    'email_content' => 'Please use the OTP below to verify your forgot password',
                    'otp_expiry_min' => $otp_expiry_min

                );

                try{
                    Mail::send('emails.otp', $data, function($message) use ($data){
                        $message->from("noreply@visarong.com", 'Visaro Nigeria');
                        $message->to(auth()->user()->email);
                        $message->subject('OTP Request');
                    });
                }catch(\Exception $e){
                // Get error here
                }



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
                //$update["otp_login_verif"] = 0;
                $update["otp_created_at"] = NULL;
                $update["otp_expiry_time"] = NULL;

                $otp_screen_expiry_time =  1;
                $date = date('Y-m-d H:i:s');
                $currentDate = strtotime($date);
                $futureDate = $currentDate+(60*$otp_screen_expiry_time); //Add 1 minute to the current date
                $expiry = date("Y-m-d H:i:s", $futureDate);

                if($otp_collection[0]->otp_type == 1) //Login Verification
                {
                    Utilities::log_this_activity("Login was successful");

                    $update['otp_login_verif'] = 1;
                    $update['otp_login_grace'] = $expiry;
                }else if($otp_collection[0]->otp_type == 2) //Forgot Password Verification
                {

                    $update['otp_forgot_pass_verif'] = 1;
                    $update['otp_forgot_grace'] = $expiry;
                }else if($otp_collection[0]->otp_type == 3) //Phone No Verification
                {
                    Utilities::log_this_activity("Phone Verification was successful");

                    $update['otp_phone_verif'] = 1;
                    $update['otp_phone_grace'] = $expiry;
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
