<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Auth;
use App\Models\Profile;
use App\Http\Controllers\Utilities;

class TransactionController extends Controller
{
    //

    public function initialize_transaction(Request $request)
    {


        $check = DB::table('trans_type')->where('trans_type_code', $request->transaction_type)->count();

        if($check < 1) //If transaction type not found
        {
            return response()->json([
                'success'=>false,
                'message'=>'Invalid Trans Type',
            ], 406);
        }

        $value = $request->amount;

        if ($request->amount == null && ! is_int($value)) {
             return response()->json([
                'success'=>false,
                'message'=>'Invalid Amount',
            ], 406);
        }





        $url = "https://api.paystack.co/transaction/initialize";

        $fields = [
            'email' => Auth::user()->email,
            'amount' => (int)DB::table('tbl_settings')->select('value')->where('name','BVN_amount')->get()[0]->value * 100, //paystack takes kobo
            //'callback_url' => DB::table('tbl_settings')->select('value')->where('name','paystack_callback')->get()[0]->value
        ];

        if (isset($request->callback_url) && $request->callback_url !="")
        {
            $fields['callback_url'] = $request->callback_url;
        }

        $fields_string = http_build_query($fields);

        //open connection
        $ch = curl_init();

        //set the url, number of POST vars, POST data
        curl_setopt($ch,CURLOPT_URL, $url);
        curl_setopt($ch,CURLOPT_POST, true);
        curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Authorization: Bearer ".DB::table('tbl_settings')->select('value')->where('name','paystack_secrete_key')->get()[0]->value,
            "Cache-Control: no-cache",
        ));

        //So that curl_exec returns the contents of the cURL; rather than echoing it
        curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);

        //execute post
        $result = curl_exec($ch);
        $res_arr = json_decode($result);

        if($res_arr->status == 1)
        {
                // Log this request to transaction table
                $check = DB::table('transactions')->insert([
                    "paystack_ref" => $res_arr->data->reference,
                    "paystack_access_code" => $res_arr->data->access_code,
                    "paystack_authorization_url" => $res_arr->data->authorization_url,
                    "user_id" => Auth::user()->id,
                    "trans_type" => $request->transaction_type,
                    "amount" => $request->amount,
                    "created_at" => NOW(),
                    "visaro_unique_id" =>  Utilities::generateUniqueTransactionId(20),
                ]);

                if($check)
                {
                    $paystack_public_key = DB::table('tbl_settings')->select('value')->where('name','paystack_public_key')->get()[0]->value;
                    return response()->json([
                        'success'=>true,
                        'message'=>'Successful',
                        'data'=> [
                            "authorization_url" => $res_arr->data->authorization_url,
                            "reference" => $res_arr->data->reference,
                            "access_code" => $res_arr->data->access_code,
                        ]
                    ], 200);
                }
        }else
        {
            return response()->json([
                'success'=>false,
                'message'=>'An unkonwn error occurred',
            ], 406);
        }



    }

    public function bvn_verification(Request $request)
    {
        $bvn = $request->bvn;



        //check if transaction has been initialize for bvn verification for the logon user
        $check = DB::table('transactions')
        ->where('paystack_ref', $request->payment_reference)
        ->where('trans_type','01')
        ->where('user_id', Auth::user()->id)->get();

        if(count($check) > 0) //If true
        {
            //Verify if the payment was successful
            $result = $this->verify_paystack($request->payment_reference);


            if($result['data']['status'] == "success") //If successful
            {
                $payment_status = 1;
            }else
            {
                $payment_status = 2;
            }

            //Update the transaction status on the transaction log
            $log = DB::table('transactions')->where('paystack_ref', $request->payment_reference)
            ->update(
                [
                    "paystack_status" => $result['data']['status'],
                    "status" => $payment_status,
                    "processed_amt" => ((int)$result['data']['amount']/100) //convert kobo to naira
                ]);



            if ($result['data']['status'] == "success")//If success also do this
            {


               //check if the user BVN Verification has been checked before
               $check_bvn = DB::table('profile as p')
               ->selectRaw('bvn_first_name, bvn_middle_name, bvn_last_name, bvn_phone_number_1,
                bvn_phone_number_2, bvn_residential_address, bvn_state_of_residence,
                bvn_lga_of_residence, r.description as stateOfResidence, l.name as lgaOfResidence,p.bvn_verified')
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

                    $data = [
                        "first_name" => $check_bvn[0]->bvn_first_name,
                        "middle_name" => $check_bvn[0]->bvn_middle_name,
                        "last_name" => $check_bvn[0]->bvn_last_name,
                        "phone_1" => $check_bvn[0]->bvn_phone_number_1,
                        "phone_2" => $check_bvn[0]->bvn_phone_number_2,
                        "address" => $check_bvn[0]->bvn_residential_address,
                        "state_of_residence" => ["id" =>  (int)$check_bvn[0]->bvn_state_of_residence, "description" => $check_bvn[0]->stateOfResidence],
                        "lga_of_residence" => ["id" => (int)$check_bvn[0]->bvn_lga_of_residence, "description" => $check_bvn[0]->lgaOfResidence]
                    ];
                }


                return response()->json([
                    'success'=>true,
                    'message'=>'success',
                    'data' => $data
                    ], 200);

               }else{
                  //Call BVN verification
                $url = "https://api.prembly.com/identitypass/verification/bvn";
                //open connection
                $ch = curl_init();

                $fields = [
                    'number' => $bvn,
                ];



                //set the url, number of POST vars, POST data
                curl_setopt($ch,CURLOPT_URL, $url);
                curl_setopt($ch,CURLOPT_POST, true);
                curl_setopt($ch,CURLOPT_POSTFIELDS, $fields);
                curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                    "app-id: ".DB::table('tbl_settings')->select('value')->where('name','premby_app_id')->get()[0]->value,
                    "x-api-key: ".DB::table('tbl_settings')->select('value')->where('name','premby_bvn_private_key')->get()[0]->value,
                ));

                //So that curl_exec returns the contents of the cURL; rather than echoing it
                curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);

                //execute post
                $result = curl_exec($ch);



                $res_arr = json_decode($result);


                if($res_arr->status == true)
                {
                    if($res_arr->response_code == "00")// Response gotten from the server
                    {

                        if($res_arr->verification->status == "VERIFIED")
                        {
                           $status = 1;

                           Utilities::log_this_activity("BVN verification completed");
                        }else
                        {
                            $status = 0;
                        }

                        //get title code
                        $title = $this->get_title_code($res_arr->data->title);
                        $state_of_res = $this->get_state_code($res_arr->data->stateOfResidence);
                        $lga_of_res = $this->get_lga_code($state_of_res, $res_arr->data->lgaOfResidence);;

                        $state_of_orig = $this->get_state_code($res_arr->data->stateOfOrigin);
                        $lga_of_orig = $this->get_lga_code($state_of_orig, $res_arr->data->lgaOfOrigin);


                        $profile = new Profile;
                        $profile->user_id = Auth::user()->id;
                        $profile->bvn_title  = $title;
                        $profile->bvn_gender  =  $this->get_gender_code($res_arr->data->gender);
                        $profile->bvn_marital_status  =  $this->get_marital_code($res_arr->data->maritalStatus);
                        //$profile->  = $res_arr->data->watchListed; YES
                        //$profile->  = $res_arr->data->levelOfAccount; Level 1 Account
                        $profile->bvn  = encrypt($res_arr->data->bvn);
                        $profile->bvn_first_name  = $res_arr->data->firstName;
                        $profile->bvn_middle_name  = $res_arr->data->middleName;
                        $profile->bvn_last_name  = $res_arr->data->lastName;
                        $profile->bvn_email  = $res_arr->data->email;
                        $profile->bvn_date_of_birth  = $res_arr->data->dateOfBirth;
                        $profile->bvn_phone_number_1  = $res_arr->data->phoneNumber1;
                        $profile->bvn_phone_number_2  = $res_arr->data->phoneNumber2;
                        $profile->bvn_reg_date  = $res_arr->data->registrationDate;
                        $profile->bvn_enroll_bank_code  = $res_arr->data->enrollmentBank;
                        $profile->bvn_enroll_branch  = $res_arr->data->enrollmentBranch;
                        $profile->business_email  = $res_arr->data->email;
                        $profile->bvn_lga_of_origin  = $lga_of_orig;
                        $profile->bvn_lga_of_residence  = $lga_of_res;
                        $profile->bvn_nin  = encrypt($res_arr->data->nin);
                        $profile->bvn_name_on_card  = $res_arr->data->nameOnCard;
                        $profile->bvn_nationality  = $this->get_country_key($res_arr->data->nationality);
                        $profile->bvn_residential_address  = $res_arr->data->residentialAddress;
                        $profile->bvn_state_of_origin  = $state_of_orig;
                        $profile->bvn_state_of_residence  = $state_of_res;
                        $profile->bvn_verified = $status;

                        $uploadpath   = 'uploads/profile_pics/';

                        $imagebase64  = base64_decode($res_arr->data->base64Image);
                        $file_name         = Auth::user()->id.'_'.base64_encode(Auth::user()->email) . '_bvn_pics.' . '.png';
                        file_put_contents($uploadpath.$file_name, $imagebase64);

                        $profile->bvn_pics_file_name =  $file_name;

                        $profile->save();

                        $data = [
                            "first_name" => $res_arr->data->firstName,
                            "middle_name" => $res_arr->data->middleName,
                            "last_name" => $res_arr->data->lastName,
                            "phone_1" => $res_arr->data->phoneNumber1,
                            "phone_2" => $res_arr->data->phoneNumber2,
                            "address" => $res_arr->data->residentialAddress,
                            "state_of_residence" => ["id" =>  (int)$state_of_res, "description" => $res_arr->data->stateOfResidence],
                            "lga_of_residence" => ["id" =>  (int)$lga_of_res, "description" => $res_arr->data->lgaOfResidence]
                        ];

                        return response()->json([
                            'success'=>true,
                            'message'=> 'success',
                            'data' => $data
                            ], 200);

                    }
                }else{
                    $message = "";
                   //Return the actual BVN Result
                   if(isset($res_arr->message))
                   {
                    $message = $res_arr->message;
                   }elseif(isset($res_arr->detail->number[0]))
                   {
                     $message = $res_arr->detail->number[0];
                   }

                   return response()->json([
                    'success'=>false,
                    'message'=> $message,

                    ], 200);

                }




               }

            }else
            {
                return response()->json([
                    'success'=>false,
                    'message'=> "the payment was not successful",

                    ], 200);
            }

        }else
        {
            return response()->json([
                'success'=>false,
                'message'=>'Transaction Not Found',
            ], 406);
        }


    }

    public function get_marital_code($description)
    {
        $title_arr = DB::table('marital_status')->where('description', $description)->get();
        if(count($title_arr) > 0)
        {
            $title = $title_arr[0]->id;
        }else
        {

            $title = DB::table('marital_status')->insert(['description' => $description]);

        }

        return $title;
    }

    public function get_gender_code($description)
    {
        $title_arr = DB::table('gender')->where('description', $description)->get();
        if(count($title_arr) > 0)
        {
            $title = $title_arr[0]->gender_id;
        }else
        {

            $title = DB::table('gender')->insert(['description' => $description]);
        }

        return $title;
    }

    public function get_country_key($description)
    {
        $title_arr = DB::table('country')->where('description', $description)->get();
        if(count($title_arr) > 0)
        {
            $title = $title_arr[0]->country_key;
        }else
        {

           $ran_bytes = random_bytes(4);
           $uid = $user_details[0]->id."_".bin2hex($ran_bytes);

           DB::table('country')->insert(['description' => $description, "country_key" => $uniq]);
           $title = $uid;
        }

        return $title;
    }

    public function get_lga_code($state_code, $description)
    {

        $title_arr = DB::table('lga')->where('description', $description)->where('region_id', $state_code)->get();


        if(count($title_arr) > 0)
        {
            $title = $title_arr[0]->id;
        }else
        {
           $title = DB::table('lga')->insertGetId(['description' => $description, 'region_id' => $state_code]);
        }

        return $title;
    }


    public function get_title_code($description)
    {
        $title_arr = DB::table('title')->where('description', $description)->get();
        if(count($title_arr) > 0)
        {
            $title = $title_arr[0]->title_code;
        }else
        {
           $title = DB::table('title')->insertGetId(['description' => $description]);
        }

        return $title;
    }

    public function get_state_code($description)
    {
        $title_arr = DB::table('region')->where('description', $description)->where('country_key','NG')->get();
        if(count($title_arr) > 0)
        {
            $state_code = $title_arr[0]->id;
        }else
        {
           $state_code = DB::table('region')->insertGetId(['description' => $description, "country_key" => "NG"]);
        }

        return $state_code;
    }

    public function verify_transaction($ref)
    {



       //check if transaction exist using the User ID and Payment
       $check = DB::table('transactions')
       ->where('paystack_ref', $ref)
       //->where('user_id', Auth::user()->id) Not needed
       ->get();

       if(count($check) > 0)
       {
           if($check[0]->user_id == Auth::user()->id)
           {
                    if($check[0]->paystack_status == "")
                    {


                        $result = $this->verify_paystack($ref);

                        if($result['status'] == false)
                        {
                            return response()->json([
                                'success'=>false,
                                'message'=>'Transaction reference not found on paystack',
                            ], 401);
                        }



                        if($result['data']['status'] == "success") //If successful
                        {
                            $payment_status = 1;
                        }else
                        {
                            $payment_status = 2;
                        }

                        //Update the transaction status on the transaction log
                        $log = DB::table('transactions')->where('paystack_ref', $ref)
                        ->update(
                            [
                                "paystack_status" => $result['data']['status'],
                                "status" => $payment_status,
                                "processed_amt" => ((int)$result['data']['amount']/100) //convert kobo to naira
                            ]);

                            if($payment_status == 1)
                            {
                                $status = "Successful";
                            }else if($payment_status == 2)
                            {
                                $status = "Failed";
                            }else if($payment_status == 2)
                            {
                                $status = "Fruadulent";
                            }

                        $data = [
                            "amount" => ((int)$result['data']['amount']/100), //convert kobo to naira
                            "created_at" => $check[0]->created_at,
                            "trans_type" => DB::table('trans_type')->where('trans_type_code',$check[0]->trans_type)->first()->description,
                            "trans_status" => $status,
                            "paystack_status" => $result['data']['status'],
                        ];

                    }
                    else
                    {
                        if($check[0]->status == 1)
                        {
                            $status = "Successful";
                        }else if($check[0]->status == 2)
                        {
                            $status = "Failed";
                        }else if($check[0]->status == 2)
                        {
                            $status = "Fruadulent";
                        }

                        $data = [
                            "amount" => $check[0]->processed_amt,
                            "created_at" => $check[0]->created_at,
                            "trans_type" => DB::table('trans_type')->where('trans_type_code', $check[0]->trans_type)->first()->description,
                            "visaro_status" => $status,
                            "paystack_status" => $check[0]->paystack_status,
                        ];
                    }

                    return response()->json([
                        'success'=>true,
                        'message'=>'Successful',
                        'data'=> $data
                    ], 200);


           }else
           {
                return response()->json([
                    'success'=>false,
                    'message'=>'You are not authorize to verify this transaction details',
                ], 401);
           }
       }else
       {
            return response()->json([
                'success'=>false,
                'message'=>'Transaction Not Found',
            ], 406);
       }
    }


    public function verify_paystack($payment_reference){

        $reference = $payment_reference;
        $paystack_secrete_key = DB::table('tbl_settings')->select('value')->where('name','paystack_secrete_key')->get()[0]->value;
        $url = 'https://api.paystack.co/transaction/verify/'.$reference;
        //open connection
        $ch = curl_init();//set request parameters
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        curl_setopt_array($ch, array(
            CURLOPT_URL => "https://api.paystack.co/transaction/verify/".rawurlencode($reference),
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER => [
                "accept: application/json",
                "authorization: Bearer ".$paystack_secrete_key."",
                "cache-control: no-cache"
            ],
        ));

        //send request
        $request_data = curl_exec($ch);//close connection

        $err = curl_error($ch);
        //curl_close($ch);//declare an array that will contain the result
        $result = array();
        if($request_data){
            $result = json_decode($request_data, true);
        }

        return $result;
    }
}
