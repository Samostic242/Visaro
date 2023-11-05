<?php

namespace App\Http\Controllers\api\v1;

use DateTime;
use App\Models\User;
use Illuminate\Http\Request;
use App\Services\MessageService;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Utilities;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\api\VbaasController;

class MessageController extends Controller
{
    private $messageService;

    public function __construct(MessageService $messageService)
    {
        $this->messageService = $messageService;
    }

    /**
     ******************************************************************************************************************************
     * @OA\Post(
     * path="/create_transaction_pin",
     * summary="Create Transaction Pin",
     * description="Create a transaction pin",
     * operationId="create_transaction_pin",
     * tags={"Create Transaction Pin"},
     * security={{"bearer_token":{}}},
     * @OA\RequestBody(
     *    required=true,
     *    description="Request body",
     *    @OA\JsonContent(
     *       required={"pin","pin_confirmation"},
     *       @OA\Property(property="pin", type="string", format="password", example="1234"),
     *       @OA\Property(property="pin_confirmation", type="string", format="password", example="1234")
     *    ),
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Successful Pin Change",
     *    @OA\JsonContent(
     *       @OA\Property(property="success", type="boolean", example="true"),
     *       @OA\Property(property="message", type="string", example="Pin was change successfully"),
     *       )
     *     )
     * )
     * ********/

    public function create_transaction_pin(Request $request)
    {
        $rules =[
            "pin" => "required|digits:4",
            "pin_confirmation" => "required|digits:4",
        ];

        $this->validate($request, $rules);

        $pin = $request->pin;
        $pin_confirmation = $request->pin_confirmation;

        if($pin != $pin_confirmation)
        {
            return response()->json([
                'success'=>false,
                'message'=>'Pin Mismatched',
            ], 406);

        }else
        {
            $user_details =  DB::table('users')->where('id', Auth::user()->id)->get();

            //If access granted to create pin and grace period time given on OTP validation has not expired
            if($user_details[0]->otp_trans_pin_flag == 1 && new DateTime(date('Y-m-d H:i:s')) < new DateTime($user_details[0]->otp_trans_pin_grace))
            {
                $hashedPin = Hash::make($pin);

                $user = User::find(Auth::user()->id);
                $user->trans_pin = $hashedPin;
                $user->otp_trans_pin_flag = 0; //revoke access to create pin
                $user->setup_trans_pin = 1; //Transaction pin has been setup for this user
                $user->save();

                Utilities::log_this_activity("Your transaction pin has been changed");

                return response()->json([
                    'success'=>true,
                    'message'=>'Pin was successfully changed',
                ], 200);

            }else
            {
                return response()->json([
                    'success'=>false,
                    'message'=>'This create pin OTP session has expired',
                ], 406);
            }
        }
    }

    /**
     ******************************************************************************************************************************
     * @OA\Get(
     * path="/get_bank_list",
     * summary="Get Bank List",
     * description="Get Bank List",
     * operationId="get_bank_list",
     * tags={"Get Bank List"},
     * security={{"bearer_token":{}}},
     * @OA\Response(
     *    response=200,
     *    description="Successful Bank List",
     *    @OA\JsonContent(
     *       @OA\Property(property="success", type="boolean", example="true"),
     *       @OA\Property(property="message", type="string", example="Success"),
     *       @OA\Property(
     *       property="data",
     *          type="object",
     *                example={
     *                 0: {
     *                       "bank_code":"02913",
     *                       "bank_name":"First Bank",
     *                       "display_img":"https://visaron.ng/logo.png",
     *                    },
     *                 1: {
     *                       "bank_code":"39291",
     *                       "bank_name":"Stanbic Bank",
     *                       "display_img":"https://visaron.ng/logo.png",
     *                    },
     *                 2: {
     *                       "bank_code":"03091",
     *                       "bank_name":"Zenith Bank",
     *                       "display_img":"https://visaron.ng/logo.png",
     *
     *                   }
     *
     *                },
     *              ),
     *       )
     *     )
     * )
     * ********/

    public function get_bank_list()
    {

       $settings = DB::table('tbl_settings')->get();
       $parameter_status = $settings->where('name','visaro_vbaas_get_parameters')->first()->value;
       $data = array();
       if($parameter_status == 0) //run get parameters from Vbaas endpoint
       {
           $vbaas = new VbaasController;
           $parameter = $vbaas->run_parameter();

       }

        $bank_collection = DB::table('banks')->select('bank_code','bank_name','display_img')->get();



       foreach($bank_collection as $bank)
       {
          $data[] =
          [
              "bank_code" => $bank->bank_code,
              "bank_name" => $bank->bank_name,
              "display_img" => url('/uploads/banks/'.$bank->display_img)
          ];
       }

        return response()->json([
            'success'=>true,
            'message'=>'success',
            'data' => $data

        ], 200);
    }

     /**
     ******************************************************************************************************************************
     * @OA\Get(
     * path="/get_bill_payment_category",
     * summary="Get Bill Payment Category",
     * description="Get Bill Payment Category",
     * operationId="get_bill_payment_category",
     * tags={"Get Bill Payment Category"},
     * security={{"bearer_token":{}}},
     * @OA\Response(
     *    response=200,
     *    description="Successful Bill Payments Category",
     *    @OA\JsonContent(
     *       @OA\Property(property="success", type="boolean", example="true"),
     *       @OA\Property(property="message", type="string", example="Success"),
     *       @OA\Property(
     *       property="data",
     *          type="object",
     *                example={
     *                 0: {
     *                       "category_code":"ELECTRICITY",
     *                       "category_name":"ELECTRICITY"
     *                    },
     *                 1: {
     *                      "category_code":"AIRTIME",
     *                      "category_name":"AIRTIME"
     *                    },
     *                 2: {
     *                      "category_code":"CABLE",
     *                      "category_name":"CABLE"
     *                   }
     *
     *                },
     *              ),
     *
     *
     *
     *       )
     *     )
     * )
     * ********/

    public function get_bill_payment_category()
    {

       $settings = DB::table('tbl_settings')->get();
       $parameter_status = $settings->where('name','visaro_vbaas_get_parameters')->first()->value;
       $data = array();
       if($parameter_status == 0) //run get parameters from Vbaas endpoint
       {
           $vbaas = new VbaasController;
           $parameter = $vbaas->run_parameter();

       }

       $category_collection = DB::table('bill_payment_category')->select('category_name','category_code')->get();


       foreach($category_collection as $cat)
       {
          $data[] =
          [
              "category_code" => $cat->category_code,
              "category_name" => $cat->category_name
          ];
       }

        return response()->json([
            'success'=>true,
            'message'=>'success',
            'data' => $data

        ], 200);

    }

    public function list_saved_beneficiary()
    {

    }


    public function saved_beneficiary()
    {

    }



    /**
     ******************************************************************************************************************************
     * @OA\Get(
     * path="/beneficial_enquiry?account_no={account_no}&bank_code={bank_code}",
     * summary="This endpoint is used to get a transfer recipient account details",
     * description="This endpoint is used to get a transfer recipient account details, e.g account_no =1111111103 & bank_code=000002",
     * operationId="beneficial_enquiry",
     * tags={"Beneficial Enquiry"},
     * security={{"bearer_token":{}}},
     * @OA\Parameter(
     *          name="account_no",
     *          description="User Account No",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="string"
     *          )
     * ),
     * @OA\Parameter(
     *          name="bank_code",
     *          description="User Bank Code",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="string"
     *          )
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Successful Recipient details",
     *    @OA\JsonContent(
     *       @OA\Property(property="success", type="boolean", example="true"),
     *       @OA\Property(property="message", type="string", example="Success"),
     *       @OA\Property(
     *       property="data",
     *          type="object",
     *                example={
     *                 0: {
     *                      "full_name": "John Thomas Usman",
     *                    }
     *
     *                },
     *              ),
     *
     *
     *
     *       )
     *     )
     * )
     * ********/

    public function beneficial_enquiry(Request $request)
    {

        $rules = [
            "account_no" => "required|numeric:4",
            "bank_code" => "required",
         ];

        $this->validate($request, $rules);

        $vbaas = new VbaasController;
        $arr_response = $vbaas->beneficial_enquiry($request->account_no, $request->bank_code);



        if(!isset($arr_response->status))
        {
            if(isset($arr_response['status']) && $arr_response['status'] == "00") //successful account get
            {
                return response()->json([
                    'success'=>true,
                    'message'=>'Success',
                    'data' => [
                    'full_name' => $arr_response['data']['name']
                    ]
                ], 200);
            }
        }else
        {
            return response()->json([
                'success'=> false,
                'message'=> $arr_response->message,
                'data' => []
            ], 406);
        }
    }

    /**
     ******************************************************************************************************************************
     * @OA\Post(
     * path="/transfer_to_visaro",
     * summary="To transfer fund to a Visaro User",
     * description="This will enable visaro users to transfer fund to other visaro users",
     * operationId="transfer_to_visaro",
     * tags={"Transfer To Visaro User"},
     * security={{"bearer_token":{}}},
     * @OA\RequestBody(
     *    required=true,
     *    description="Request body",
     *    @OA\JsonContent(
     *       required={"username","amount","transaction_pin","transfer_type","naratation"},
     *       @OA\Property(property="username", type="string", format="text", example="es@yahoo.com"),
     *       @OA\Property(property="amount", type="string", format="text", example="100.00"),
     *       @OA\Property(property="transaction_pin", type="string", format="password", example="1234"),
     *       @OA\Property(property="naration", type="string", format="text", example="school fees for next year"),
     *
     *    ),
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Successful Pin Change",
     *    @OA\JsonContent(
     *       @OA\Property(property="success", type="boolean", example="true"),
     *       @OA\Property(property="message", type="string", example="success"),
     *       @OA\Property(
     *       property="data",
     *          type="object",
     *                example={
     *                       "trans_id":"visaro-nigeria-28335603651132",
     *                },
     *              ),
     *       )
     *     )
     * )
     * ********/

    public function transfer_to_visaro(Request $request)
    {
       $rules = [
           "username" => "required",
           "amount" => ["required", "regex:/^\d+(\.\d{1,2})?$/"],
           "transaction_pin" => "required",
           "naration" => "required"
        ];

       $this->validate($request, $rules);


       //pin check
       $check_pin = Utilities::verify_transaction_pin($request->transaction_pin); //1 - Matched


       if(json_decode($check_pin->getContent())->success == true)
       {
           //check balance of this user
           $wallet = DB::table('wallet')->where('owners_id', Auth::user()->id)->get();
           if(count($wallet) > 0)
           {
           if($wallet[0]->status ==  1) //Wallet is active
           {
               if($wallet[0]->visaro_balance > $request->amount)
               {
                   $visaro_session_id = Utilities::generateUniqueTransactionId(20);
                   //Debit user wallet
                   $query_debit = DB::table('wallet')->where('owners_id', Auth::user()->id)->decrement('visaro_balance', $request->amount);
                   $current_bal = DB::table('wallet')->where('owners_id', Auth::user()->id)->get();

                   //Log transaction
                   $log_query =  DB::table('transactions')->insert([
                        "trans_type" => "02", //Transfer
                        "amount" => $request->amount,
                        "user_id" => Auth::user()->id,
                        "created_at" => NOW(),
                        "prev_wall_bal" => $wallet[0]->visaro_balance,
                        "curr_wall_bal" => $current_bal[0]->visaro_balance,
                        "visaro_unique_id" => $visaro_session_id,
                        "status" => 1
                   ]);


                        if ($request->username == Auth::user()->email)
                        {
                             //Reverse Amount
                             $query_debit = DB::table('wallet')->where('owners_id', Auth::user()->id)->increment('visaro_balance', $request->amount);

                             //Log transaction
                             $log_query =  DB::table('transactions')->insert([
                                     "trans_type" => "03", // Reversal
                                     "amount" => $request->amount,
                                     "user_id" => Auth::user()->id,
                                     "created_at" => NOW(),
                                     "prev_wall_bal" => $current_bal[0]->visaro_balance,
                                     "curr_wall_bal" => $wallet[0]->visaro_balance,
                                     "visaro_unique_id" =>  Utilities::generateUniqueTransactionId(20),
                                     "status" => 1,
                                     "reversal_of" => $visaro_session_id
                             ]);

                             //Reverse user account
                             return response()->json([
                                 'success'=>false,
                                 'message'=>'An error occured while trying to credit '.$request->username.' please try again later',
                             ], 406);
                        }else
                        {
                               //Get Receiver details

                               $receiver_collections = DB::table('users')
                               ->where('email', $request->username)
                               ->join('wallet','owners_id', 'id')
                               ->get();

                               if(count($receiver_collections) > 0)
                               {

                                   //Credit Reciever
                                   $query_credit = DB::table('wallet')->where('owners_id', $receiver_collections[0]->id)->increment('visaro_balance', $request->amount);

                                   $trans_id = Utilities::generateUniqueTransactionId(20);
                                   //Log transaction
                                   $log_query =  DB::table('transactions')->insert([
                                       "trans_type" => "04", //Credit
                                       "amount" => $request->amount,
                                       "user_id" => $receiver_collections[0]->id,
                                       "created_at" => NOW(),
                                       "prev_wall_bal" => $receiver_collections[0]->visaro_balance,
                                       "curr_wall_bal" => ($receiver_collections[0]->visaro_balance + $request->amount),
                                       "visaro_unique_id" => $trans_id,
                                       "status" => 1
                                   ]);


                                   return response()->json([
                                       'success'=> true,
                                       'message'=> "Success",
                                       'data' => [
                                           "trans_id" => $trans_id
                                       ]
                                   ], 200);




                               }else
                               {

                                   //Reverse Amount
                                   $query_debit = DB::table('wallet')->where('owners_id', Auth::user()->id)->increment('visaro_balance', $request->amount);

                                   //Log transaction
                                   $log_query =  DB::table('transactions')->insert([
                                           "trans_type" => "03", // Reversal
                                           "amount" => $request->amount,
                                           "user_id" => Auth::user()->id,
                                           "created_at" => NOW(),
                                           "prev_wall_bal" => $current_bal[0]->visaro_balance,
                                           "curr_wall_bal" => $wallet[0]->visaro_balance,
                                           "visaro_unique_id" =>  Utilities::generateUniqueTransactionId(20),
                                           "status" => 1,
                                           "reversal_of" => $visaro_session_id
                                   ]);


                                   //Reverse user account
                                   return response()->json([
                                       'success'=>false,
                                       'message'=>'Unable to determine beneficiary',
                                   ], 406);
                               }
                        }


               }
               else
               {
                   return response()->json([
                       'success'=> false,
                       'message'=> "Insufficient Fund",

                   ], 406);
               }

           }else
           {
                   return response()->json([
                       'success'=> false,
                       'message'=> "Your wallet has been deactivated",

                   ], 406);
           }
           }else
           {
               return response()->json([
                   'success'=> false,
                   'message'=> "Wallet Not Found",

               ], 406);
           }

       }else
       {
           return $check_pin;
       }
    }

    /**
     ******************************************************************************************************************************
     * @OA\Post(
     * path="/transfer",
     * summary="To transfer fund to a beneficiary",
     * description="This will enable visaro users to transfer fund to a bank account or to a visaro user",
     * operationId="transfer",
     * tags={"Transfer To Bank Account"},
     * security={{"bearer_token":{}}},
     * @OA\RequestBody(
     *    required=true,
     *    description="Request body",
     *    @OA\JsonContent(
     *       required={"to_bank_code","to_account_no","amount","transaction_pin","naratation"},
     *       @OA\Property(property="to_bank_code", type="string", format="text", example="000002"),
     *       @OA\Property(property="to_account_no", type="string", format="text", example="1111111103"),
     *       @OA\Property(property="amount", type="string", format="text", example="100.00"),
     *       @OA\Property(property="transaction_pin", type="string", format="password", example="1234"),
     *       @OA\Property(property="naration", type="string", format="text", example="school fees for next year"),
     *
     *    ),
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Successful Pin Change",
     *    @OA\JsonContent(
     *       @OA\Property(property="success", type="boolean", example="true"),
     *       @OA\Property(property="message", type="string", example="success"),
     *       @OA\Property(
     *       property="data",
     *          type="object",
     *                example={
     *                       "trans_id":"visaro-nigeria-28335603651132",
     *                       "session_id":"090110230917213213278064743451",
     *                       "reference":"13711694982733293",
     *                },
     *              ),
     *       )
     *     )
     * )
     * ********/

     public function transfer(Request $request)
     {
        $rules = [
            "to_bank_code" => "required",
            "to_account_no" => "required",
            "amount" => ["required", "regex:/^\d+(\.\d{1,2})?$/"],
            "transaction_pin" => "required",
            "naration" => "required"
         ];

        $this->validate($request, $rules);


        //pin check
        $check_pin = Utilities::verify_transaction_pin($request->transaction_pin); //1 - Matched


        if(json_decode($check_pin->getContent())->success == true)
        {
            //check balance of this user
            $wallet = DB::table('wallet')->where('owners_id', Auth::user()->id)->get();
            if(count($wallet) > 0)
            {
            if($wallet[0]->status ==  1) //Wallet is active
            {
                if($wallet[0]->visaro_balance > $request->amount)
                {
                    $visaro_session_id = Utilities::generateUniqueTransactionId(20);
                    $settings = DB::table('tbl_settings')->get();
                    $parameter_status = $settings->where('name','visaro_vbaas_get_parameters')->first()->value;
                    $data = array();
                    $vbaas = new VbaasController;
                    if($parameter_status == 0) //run get parameters from Vbaas endpoint
                    {

                        $parameter = $vbaas->run_parameter();
                    }

                    //Debit user wallet
                    $query_debit = DB::table('wallet')->where('owners_id', Auth::user()->id)->decrement('visaro_balance', $request->amount);
                    $current_bal = DB::table('wallet')->where('owners_id', Auth::user()->id)->get();

                    //Log transaction
                    $log_query =  DB::table('transactions')->insert([
                         "trans_type" => "02", //Transfer
                         "amount" => $request->amount,
                         "user_id" => Auth::user()->id,
                         "created_at" => NOW(),
                         "prev_wall_bal" => $wallet[0]->visaro_balance,
                         "curr_wall_bal" => $current_bal[0]->visaro_balance,
                         "visaro_unique_id" => $visaro_session_id,
                         "status" => 1
                    ]);



                        $arr_response = $vbaas->transfer($request->to_bank_code, $request->to_account_no, $request->amount, $request->naration);

                        //Successful
                        if(isset($arr_response["status"]) && $arr_response["status"] == "00")
                        {
                            //Update Transaction record
                            $update_log_query = DB::table('transactions')->where('visaro_unique_id', $visaro_session_id)
                            ->update([
                                "status" => 1,
                                "transfer_txnid" =>  $arr_response["data"]["txnId"],
                                "transfer_session_id" =>  $arr_response["data"]["sessionId"],
                                "transfer_reference" => $arr_response["data"]["reference"],
                                "transfer_server_status" => $arr_response["status"],
                                "transfer_server_message" => $arr_response["message"],
                            ]);

                            return response()->json([
                                'success'=> true,
                                'message'=> "Success",
                                'data' => [
                                    "trans_id" => $arr_response["data"]["txnId"],
                                    "session_id" => $arr_response["data"]["sessionId"],
                                    "reference" => $arr_response["data"]["reference"],
                                ]
                            ], 200);

                        }else
                        {
                            //Reverse Amount
                            $query_debit = DB::table('wallet')->where('owners_id', Auth::user()->id)->increment('visaro_balance', $request->amount);

                            //Log transaction
                            $log_query =  DB::table('transactions')->insert([
                                    "trans_type" => "03", // Reversal
                                    "amount" => $request->amount,
                                    "user_id" => Auth::user()->id,
                                    "created_at" => NOW(),
                                    "prev_wall_bal" => $current_bal[0]->visaro_balance, //Switch it
                                    "curr_wall_bal" =>  $wallet[0]->visaro_balance,
                                    "visaro_unique_id" =>  Utilities::generateUniqueTransactionId(20),
                                    "status" => 1,
                                    "reversal_of" => $visaro_session_id
                            ]);

                            return response()->json([
                                'success'=> false,
                                'message'=> $arr_response["message"],

                            ], 406);

                        }

                }
                else
                {
                    return response()->json([
                        'success'=> false,
                        'message'=> "Insufficient Fund",

                    ], 406);
                }

            }else
            {
                    return response()->json([
                        'success'=> false,
                        'message'=> "Your wallet has been deactivated",

                    ], 406);
            }
            }else
            {
                return response()->json([
                    'success'=> false,
                    'message'=> "Wallet Not Found",

                ], 406);
            }

        }else
        {
            return $check_pin;
        }
     }


    public function create_password(Request $request)
    {

        $password = $request->password;
        $password_confirmation = $request->password_confirmation;

        if($password != $password_confirmation)
        {
            return response()->json([
                'success'=>false,
                'message'=>'Password Mismatched',
            ], 406);

        }else
        {
              $user_details =  DB::table('users')->where('id', Auth::user()->id)->get();

              //If access granted to create password and grace period time given on OTP validation has not expired
              if($user_details[0]->otp_forgot_pass_verif == 1 && new DateTime(date('Y-m-d H:i:s')) < new DateTime($user_details[0]->otp_forgot_grace))
              {

                $user = User::find(Auth::user()->id);
                //$user->otp_forgot_grace = NOW();
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
                    'message'=>'This create password OTP session has expired',
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

        //get wallet balance
        $wallet_collection = $this->get_wallet();

        $onboarding = [
            "bvn_verification" => count($check) > 0 ?($check[0]->bvn_verified == 1?true:false):false,
            "profile_picture_upload" => count($check) > 0 ? ($check[0]->profile_pics_file_name != ""?true:false):false,
            "account_type" => count($check) > 0 ?($check[0]->account_type == 1?"Personal Account":($check[0]->account_type == NULL?"Not Set":"Company Account")):"Not Set",
            "setup_trans_pin" => Auth::user()->setup_trans_pin == 1?true:false,
            "phone_no_verification" => Auth::user()->otp_phone_verif == 1?true:false,
        ];


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


         if(count($check) > 0)
         {
            //Check if BVN is verified
            if($check[0]->profile_pics_file_name != "")
            {




               return response()->json([
                'success'=> true,
                'message'=>'Success',
                'data' =>[
                    "onboarding" => $onboarding,
                    "wallet" => $wallet,
                    "bnpl_services" => $bnpl_services,
                    "activities_log" => $activities,
                    "registered_hospital" => $hospital
                ]
            ], 200);


            }else
            {
                return response()->json([
                    'success'=>true,
                    'message'=>'Your onboarding process is not completed',
                    'data' =>[
                        "onboarding" => $onboarding,
                        "wallet" => $wallet,
                        "bnpl_services" => $bnpl_services,
                        "activities_log" => $activities,
                        "registered_hospital" => $hospital

                    ]
                ], 200);
            }

         }else{
            return response()->json([
                'success'=>true,
                'message'=>'Your onboarding process is not completed',
                'data' =>[
                    "onboarding" => $onboarding,
                    "wallet" => $wallet,
                    "bnpl_services" => $bnpl_services,
                    "activities_log" => $activities,
                    "registered_hospital" => $hospital
                ]
            ], 200);
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


                $link = "https://visaro.ng";//verify email link
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

                $link = "https://visaro.ng";//verify email link
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


                $link = "https://visaro.ng";//verify email link
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
            else if($otp_type == 4) //Transaction Pin
            {

                $update['otp_trans_pin_flag'] = 0;
                $sent_to = Auth::user()->email;


                $link = "https://visaro.ng";//verify email link
                $data = array(
                    'full_name'=>auth()->user()->firstname." ".auth()->user()->lastname,
                    'link'=> $link,
                    'otp' => $otp,
                    'title' => 'Verify your change transaction pin',
                    'email_content' => 'Please use the OTP below to create a new transaction pin',
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

    /**
     ******************************************************************************************************************************
     * @OA\Post(
     * path="/initialize_change_password",
     * summary="Initialize Change Password",
     * description="Initialize change password",
     * operationId="initialize_change_password",
     * tags={"Initialize Change Password"},
     * security={{"bearer_token":{}}},
     * @OA\RequestBody(
     *    required=true,
     *    description="Request body",
     *    @OA\JsonContent(
     *       required={"old_password"},
     *       @OA\Property(property="old_password", type="string", format="password", example="password@1234")
     *    ),
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Successful Pin Change",
     *    @OA\JsonContent(
     *       @OA\Property(property="success", type="boolean", example="true"),
     *       @OA\Property(property="message", type="string", example="Initialize password change was successful"),
     *       )
     *     )
     * )
     * ********/

    public function initialize_change_password(Request $request)
    {
        $rules = [
            "old_password" => "required"
        ];

        $this->validate($request, $rules);


        if (Utilities::verify_password($request->old_password)) {

            $otp_screen_expiry_time =  1;
            $date = date('Y-m-d H:i:s');
            $currentDate = strtotime($date);
            $futureDate = $currentDate+(60*$otp_screen_expiry_time); //Add 1 minute to the current date

            $expiry = date("Y-m-d H:i:s", $futureDate); //When initialize pin is successful, the users must change  pin etc before the grace period elapses

            User::where('id', auth()->user()->id)
            ->update([
                "otp_forgot_grace" => $expiry,
                "otp_forgot_pass_verif" => 1 //Grant access to change pin
            ]);

            return response()->json([
                'success'=>true,
                'message'=>'Initialize password change was successful',

              ], 200);



        }else
        {
            return response()->json([
                'success'=>false,
                'message'=>'Invalid Password',
            ], 406);
        }



    }



    /**
     ******************************************************************************************************************************
     * @OA\Post(
     * path="/initialize_change_transaction_pin",
     * summary="Initialize Change Transaction Pin",
     * description="Initialize change transaction pin process",
     * operationId="initialize_change_transaction_pin",
     * tags={"Initialize Change Transaction Pin"},
     * security={{"bearer_token":{}}},
     * @OA\RequestBody(
     *    required=true,
     *    description="Request body",
     *    @OA\JsonContent(
     *       required={"old_pin"},
     *       @OA\Property(property="old_pin", type="string", format="password", example="1234")
     *    ),
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Successful Pin Change",
     *    @OA\JsonContent(
     *       @OA\Property(property="success", type="boolean", example="true"),
     *       @OA\Property(property="message", type="string", example="Initialize pin change was successful"),
     *       )
     *     )
     * )
     * ********/



    public function initialize_change_transaction_pin(Request $request)
    {
            $rules =[
                "old_pin" => "required|digits:4",
            ];

            $this->validate($request, $rules);

            $process = Utilities::verify_transaction_pin($request->old_password)->getContent();
            $res =  json_decode($process);

            if ($res->success == 1) {
                // The entered pin is correct

                $otp_screen_expiry_time =  1;
                $date = date('Y-m-d H:i:s');
                $currentDate = strtotime($date);
                $futureDate = $currentDate+(60*$otp_screen_expiry_time); //Add 1 minute to the current date

                $expiry = date("Y-m-d H:i:s", $futureDate); //When initialize pin is successful, the users must change  pin etc before the grace period elapses

                User::where('id', auth()->user()->id)
                ->update([
                    "otp_trans_pin_grace" => $expiry,
                    "otp_trans_pin_flag" => 1 //Grant access to change pin
                ]);

                return response()->json([
                    'success'=>true,
                    'message'=>'Initialize pin change was successful',

                  ], 200);

            } else {
                return $process;
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

        if(count($otp_collection) > 0 )
        {
            if($otp_collection[0]->otp_expiry_time < date('Y-m-d H:i:s'))
            {
                //OTP has expired - Invalid
                return response()->json([
                    'success'=>true,
                    'message'=>'OTP has expired',

                ], 406);

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

                $expiry = date("Y-m-d H:i:s", $futureDate); //When OTP validation is successful, users must change password, pin etc before the grace period elapses

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
                }else if($otp_collection[0]->otp_type == 4) //Change transaction Pin Profiling
                {

                    $update['otp_trans_pin_flag'] = 1; //You have been granted access to change pin
                    $update['otp_trans_pin_grace'] = $expiry;
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
