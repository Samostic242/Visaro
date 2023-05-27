<?php

namespace App\Http\Controllers\api;

use Validator;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Laravel\Passport\TokenRepository;
use Laravel\Passport\RefreshTokenRepository;
use App\Http\Controllers\Controller;
use Mail;

class PassportController extends Controller
{

    /**
     * Register user.
     *
     * @return json
     */

    /**
     *
     * @OA\Post(
     * path="/register",
     * summary="Registration",
     * description="To create a new user on the system",
     * operationId="registration",
     * tags={"Account Creation"},
     * security={{"bearer_token":{}}},
     * @OA\RequestBody(
     *    required=true,
     *    description="User Details",
     *    @OA\JsonContent(
     *       required={"email","password"},
     *       @OA\Property(property="email", type="string", format="email", example="user1@mail.com"),
     *       @OA\Property(property="password", type="string", format="password", example="PassWord12345"),
     *
     *    ),
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Successful Registration",
     *    @OA\JsonContent(
     *       @OA\Property(property="success", type="boolean", example="true"),
     *       @OA\Property(property="message", type="string", example="User registered succesfully, Use Login method to receive token.")
     *        )
     *     )
     * ),
     * @OA\Response(
     *    response=402,
     *    description="Wrong credentials response",
     *    @OA\JsonContent(
     *       @OA\Property(property="success", type="boolean", example="false"),
     *       @OA\Property(property="message", type="string", example="User authentication failed.")
     *        )
     *     ),
     * )
     *
     * ****************************************************************************************************************************
     * @OA\Post(
     * path="/login",
     * summary="Sign in",
     * description="Login by email, password to get access token",
     * operationId="authLogin",
     * tags={"Access Token"},
     * security={{"bearer_token":{}}},
     * @OA\RequestBody(
     *    required=true,
     *    description="Account login credentials",
     *    @OA\JsonContent(
     *       required={"email","password"},
     *       @OA\Property(property="email", type="string", format="email", example="user1@mail.com"),
     *       @OA\Property(property="password", type="string", format="password", example="PassWord12345"),
     *
     *    ),
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Successful Login",
     *    @OA\JsonContent(
     *       @OA\Property(property="success", type="boolean", example="true"),
     *       @OA\Property(property="message", type="string", example="User login succesfully, Use token to authenticate."),
     *       @OA\Property(property="token", type="string", example="eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIzIiwianRpIjoiODQ3MThkNTZjZTZiYWI2OGFmNDgwZjlmNjA4NTA4NGU5M2NhY2JiMjRmZWU4ZWQzZGE0YTQ4OGQ1ZTRlM2NiN2RlNmRmN2VkYjY5ZjhjZjciLCJpYXQiOjE2NzQzNzg3MjEsIm5iZiI6MTY3NDM3ODcyMSwiZXhwIjoxNzA1OTE0NzIxLCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.d7D4ZXHxRZ8D44noKOOtzkMBlYbd8sDMQLIxwlOHc_RAqG64SbuRHWQzg7DPG9WqlKiBFF53LxLT6lQScmml5uanneTVCB9LKdzMP9WpXDS1OHklepPgdiuXaWbvH5k226uDEl1QfCL3EJoFICRQE7CW-4UCsjpP08XOiIDblc2UnPdJWW6wyWgf0xS5VGAwTRc_PzWNLIWcustebWhT9Od9blVyz_yeyQ9fRKBBScHiWvcOKwfn1dHrMDmtlJsM_B4mR-csxez9Zun05SjyhegQI2Q1Ldi1SWshi4BSBm70DS3CuKBAdP5Py9aoNHjyM-4ow_z57ozbuRqTT3-6qPbNTW85zYSAS0g_VSkla2iyhiRN_GyiLwp7-F1iqvoElU1Os63popaYUo7Dbg3JSXQGbClXlCHMCFwaofDBgfuMmz-qAdiCFoYGqkWb9iZSjz57wRUuH3HoXYpJ7QfP-YwUGKMKdyEYsYdM9wz3jHwgZHUay-2YPQHFPhRwkm3wQwWkGH4C-n4PNprOJrXiTYIJqQ95WowEq0VY8Wljr_0RAb5_cJUtjlwIfafcTrXQkY6ZQ6NFikUlRLpDUDjSl9cDvQIxFoUuzlxwVGfSzy6PL-k4m_kTWABJeYb_lDLlF5AoDVBGum6h472jbhEiIspci9R7srWUw7S")
     *        )
     *     )
     * ),
     * @OA\Response(
     *    response=401,
     *    description="Wrong credentials response",
     *    @OA\JsonContent(
     *       @OA\Property(property="success", type="boolean", example="false"),
     *       @OA\Property(property="message", type="string", example="User authentication failed.")
     *        )
     *     ),
     * ),
     *******************************************************************************************************************************
     * @OA\Post(
     * path="/validate_otp",
     * summary="To validate user OTP",
     * description="This endpoint will be used to validate any otp sent to a user phone",
     * operationId="validate_otp",
     * tags={"Validate OTP"},
     * security={{"bearer_token":{}}},
     * @OA\RequestBody(
     *    required=true,
     *    description="Request body",
     *    @OA\JsonContent(
     *       required={"otp_code"},
     *       @OA\Property(property="otp_code", type="string",  example="9328")
     *    ),
     * ),
     * @OA\Response(
     *    response=301,
     *    description="OTP Valid",
     *    @OA\JsonContent(
     *       @OA\Property(property="success", type="boolean", example="true"),
     *       @OA\Property(property="message", type="string", example="OTP is valid")
     *        )
     *     ),
     * ),
     *
     * *******************************************************************************************************************************
     * @OA\Get(
     * path="/resend_otp/{otp_type}",
     * summary="To resend user OTP",
     * description="This endpoint will be used to resend",
     * operationId="resend_otp",
     * tags={"Resend OTP"},
     * security={{"bearer_token":{}}},
     * @OA\Parameter(
     *          name="otp_type",
     *          description="Otp Type ID",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     * @OA\Response(
     *    response=200,
     *    description="OTP was successfully sent",
     *    @OA\JsonContent(
     *       @OA\Property(property="success", type="boolean", example="true"),
     *       @OA\Property(property="message", type="string", example="OTP has been sent to user_email@exampl.com")
     *        )
     *     ),
     * ),
     *
     *********************************************************************************************************************************
     * @OA\Get(
     * path="/list_otp_types",
     * summary="To list all OTP Types",
     * description="This return all the types of OTP request",
     * operationId="list_otp_types",
     * tags={"List OTP Types"},
     * security={{"bearer_token":{}}},
     * @OA\Response(
     *    response=200,
     *    description="OTP was successfully sent",
     *    @OA\JsonContent(
     *       @OA\Property(property="success", type="boolean", example="true"),
     *       @OA\Property(property="message", type="string", example="Success"),
     *       @OA\Property(
     *          property="data",
     *          type="object",
     *                example={
     *                 0: {
     *                       "id":"1",
     *                       "decription":"Login Verification",
     *                    },
     *                 1: {
     *                       "id":"2",
     *                       "decription":"Forgot Password Verification",
     *                    },
     *                 2: {
     *                       "id":"3",
     *                       "decription":"Phone Number Verification",
     *
     *                   }
     *
     *                },
     *              ),
     *        )
     *     ),
     * ),
     *
     **********************************************************************************************************************************
     * @OA\Post(
     * path="/forgotpassword",
     * summary="To send email containing password password reset code",
     * description="This will be used whenever a user wants to recover a password using the forgot password interface",
     * operationId="forgotpassword",
     * tags={"Forgot Password"},
     * security={{"bearer_token":{}}},
     * @OA\RequestBody(
     *    required=true,
     *    description="Request body",
     *    @OA\JsonContent(
     *       required={"email"},
     *       @OA\Property(property="email", type="string", format="email", example="example@gmail.com")
     *    ),
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Recover email sent",
     *     @OA\JsonContent(
     *       @OA\Property(property="success", type="boolean", example="true"),
     *       @OA\Property(property="message", type="string", example="OTP has been sent to example@gmail.com")
     *        )
     *     )
     * ),

     ****************************************************************************************************************************************
     * @OA\Post(
     * path="/create_password",
     * summary="To Create Password",
     * description="This will be used to create new password during password change",
     * operationId="create_password",
     * tags={"Create Password"},
     * security={{"bearer_token":{}}},
     * @OA\RequestBody(
     *    required=true,
     *    description="Request body",
     *    @OA\JsonContent(
     *       required={"password","password_confirmation"},
     *       @OA\Property(property="password", type="string", format="password", example="Password@12345"),
     *       @OA\Property(property="password_confirmation", type="string", format="password", example="Password@12345")
     *    ),
     * ),
     * @OA\Response(
     *    response=200,
     *    description="Forgot Password Changed",
     *     @OA\JsonContent(
     *       @OA\Property(property="success", type="boolean", example="true"),
     *       @OA\Property(property="message", type="string", example="Password was successfully changed")
     *        )
     *     )
     * ),
     *
     ********************************************************************************************************************************
     * @OA\Post(
     * path="/profile_update",
     * summary="To Update Profile",
     * description="This update profile",
     * operationId="profile_update",
     * tags={"Profile Update"},
     * security={{"bearer_token":{}}},
     * @OA\RequestBody(
     *    required=true,
     *    description="Request body",
     *       @OA\MediaType(
     *             mediaType="multipart/form-data",
     *             @OA\Schema(
     *                 required={"profile_pics","firstname","lastname","dob","bvn","address","country","region","gender","phone_no_country_code","phone_no","photo_img"},
     *                 @OA\Property(property="firstname", type="string",  example="John"),
     *                 @OA\Property(property="lastname", type="string",  example="Doe"),
     *                 @OA\Property(property="dob", type="string",  example="1950-12-26"),
     *                 @OA\Property(property="bvn", type="string", example="712874837219"),
     *                 @OA\Property(property="address", type="string", example="No. 28 Isoko Street"),
     *                 @OA\Property(property="country", type="string", example="NG"),
     *                 @OA\Property(property="region", type="string", example="688"),
     *                 @OA\Property(property="gender", type="string", example="m"),
     *                 @OA\Property(property="phone_no_country_code", type="string", example="234"),
     *                 @OA\Property(property="phone_no", type="string", example="080900000000"),
     *                 @OA\Property(
     *                     description="Profile Picture",
     *                     property="profile_pics",
     *                     type="string",
     *                     format="binary",
     *                 ),
     *             )
     *         )
     * ),
     * @OA\Response(
     *    response=200,
     *   description="Successful profile update",
     *     @OA\JsonContent(
     *       @OA\Property(property="success", type="boolean", example="true"),
     *       @OA\Property(property="message", type="string", example="Profile was successfully updated"),
     *       @OA\Property(
     *          property="data",
     *          type="object",
     *                example={
     *                 0: {
     *                       "firstname":"John",
     *                       "lastname":"doe",
     *                       "dob":"1950-12-26",
     *                       "bvn":"712874837219",
     *                       "address":"No. 28 Isoko Street",
     *                       "country":"NG",
     *                       "region":"688",
     *                       "gender":"m",
     *                       "phone_no_country_code":"234",
     *                       "phone_no":"080900000000",
     *                       "profie_pics":"https://visaro.com/img/4938932881343.png"
     *                    }
     *
     *                },
     *              ),
     *
     *        )**
     *        )
     *     )
     * ),
     *
     ********************************************************************************************************************************
     * @OA\Post(
     * path="/company_profile_update",
     * summary="To Update Company Profile",
     * description="This update Company profile",
     * operationId="company_profile_update",
     * tags={"Company Profile Update"},
     * security={{"bearer_token":{}}},
     * @OA\RequestBody(
     *    required=true,
     *    description="Request body",
     *    @OA\MediaType(
     *             mediaType="multipart/form-data",
     *             @OA\Schema(
     *                 required={"profile_pics","business_name","business_address","business_email","country_of_origin","port_of_origin","certificate_of_incoporation","memart","acfta_certificate"},
     *                 @OA\Property(property="business_name", type="string",  example="Smart Pay Limited"),
     *                 @OA\Property(property="business_address", type="string",  example="No. 5 Bourdilon Road Ikoyi"),
     *                 @OA\Property(property="business_email", type="string",  example="info@smartpay.com"),
     *                 @OA\Property(property="country_of_origin", type="string", example="NG"),
     *                 @OA\Property(property="port_of_origin", type="string", example="803"),
     *                 @OA\Property(
     *                     description="Certificate of Incoporation",
     *                     property="certificate_of_incoporation",
     *                     type="string",
     *                     format="binary",
     *                 ),
     *                 @OA\Property(
     *                     description="memart ",
     *                     property="memart",
     *                     type="string",
     *                     format="binary",
     *                 ),
     *                 @OA\Property(
     *                     description="acfta certificate ",
     *                     property="acfta_certificate",
     *                     type="string",
     *                     format="binary",
     *                 ),
     *             )
     *         ),
     * ),
     * @OA\Response(
     *    response=200,
     *   description="Successful profile update",
     *     @OA\JsonContent(
     *       @OA\Property(property="success", type="boolean", example="true"),
     *       @OA\Property(property="message", type="string", example="Company profile was successfully updated"),
     *       @OA\Property(
     *          property="data",
     *          type="object",
     *                example={
     *                 0: {
     *                       "business_name":"Smart Pay Limited",
     *                       "business_address":"No. 5 Bourdilon Road Ikoyi",
     *                       "business_email":"info@smartpay.com",
     *                       "country_of_origin":"NG",
     *                       "port_of_origin":"803",
     *                    }
     *
     *                },
     *              ),
     *
     *        )**
     *        )
     *     )
     * ),
     * **********************************************************************************************************************************
     *
     * @OA\get(
     * path="/country_list",
     * summary="To list all country",
     * description="This endpoint will return all countries",
     * operationId="country_list",
     * tags={"Country List"},
     * security={{"bearer_token":{}}},
     * @OA\Response(
     *    response=200,
     *    description="List of Country",
     *     @OA\JsonContent(
     *       @OA\Property(property="success", type="boolean", example="true"),
     *       @OA\Property(property="message", type="string", example="your query was successful"),
     *       @OA\Property(
     *          property="data",
     *          type="object",
     *                example={
     *                 0: {
     *                       "id":"AD",
     *                       "decription":"Andorra",
     *                    },
     *                 1: {
     *                       "id":"AE",
     *                       "decription":"United Arab Emirates",
     *                    },
     *                 2: {
     *                       "id":"AF",
     *                       "decription":"Afghanistan",
     *
     *                   },
     *                3: {
     *                       "id":"AG",
     *                       "decription":"Antigua and Barbuda",
     *                   },
     *                4: {
     *                       "id":"AI",
     *                       "decription":"Anguilla",
     *                   }
     *
     *                },
     *              ),
     *
     *        )
     *     )
     * ),
     * **********************************************************************************************************************************
     *
     * @OA\get(
     * path="/region_list/{country_key}",
     * summary="To list all region in a country",
     * description="This endpoint will return all regions in a selected country",
     * operationId="region_list",
     * tags={"Region List"},
     * security={{"bearer_token":{}}},
     * @OA\Parameter(
     *          name="country_key",
     *          description="Country Key",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="string"
     *          )
     *      ),
     * @OA\Response(
     *    response=200,
     *    description="List of region",
     *     @OA\JsonContent(
     *       @OA\Property(property="success", type="boolean", example="true"),
     *       @OA\Property(property="message", type="string", example="your query was successful"),
     *       @OA\Property(
     *          property="data",
     *          type="object",
     *                example={
     *                 0: {
     *                       "id":"253",
     *                       "decription":"Abuja",
     *                    },
     *                 1: {
     *                       "id":"53",
     *                       "decription":"Abuja",
     *                    },
     *                 2: {
     *                       "id":"216",
     *                       "decription":"Adamawa",
     *
     *                   },
     *                3: {
     *                       "id":"178",
     *                       "decription":"Akwa Ibom",
     *                   },
     *                4: {
     *                       "id":"101",
     *                       "decription":"Anambra",
     *                   }
     *
     *                },
     *              ),
     *
     *        )
     *     )
     * ),
     *
     *
     */


    public function register(Request $request)
    {
        $input = $request->only(['email', 'password']);

        $validate_data = [
            'email' => 'required|email',
            'password' => 'required|min:8',
        ];

        $validator = Validator::make($input, $validate_data);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Please see errors parameter for all errors.',
                'errors' => $validator->errors()
            ]);
        }

        $check_if_exist = User::where('email', $input['email'])->count();
        if($check_if_exist > 0)
        {
            return response()->json([
                'success' => false,
                'message' => 'User already exist'
            ], 406);
        }

         $user = new User;
         /*$user->firstname = $input['firstname'];
         $user->middlename = $input['middlename'];
         $user->lastname = $input['lastname'];*/
         $user->email = $input['email'];
         $user->password = Hash::make($input['password']);
         $user->save();
        /*$user = User::create([
            'firstname' => $input['firstname'],
             'middlename' => $input['middlename'],
            'lastname' => $input['lastname'],
            'email' => $input['email'],
            'password' => Hash::make($input['password'])
        ]);
        */

        return response()->json([
            'success' => true,
            'message' => 'User registered succesfully, Use Login method to receive token.'
        ], 201);
    }

    /**
     * Login user.
     *
     * @return json
     */
    public function login(Request $request)
    {
        $input = $request->only(['email', 'password']);

        $validate_data = [
            'email' => 'required|email',
            'password' => 'required',
        ];

        $validator = Validator::make($input, $validate_data);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Please see errors parameter for all errors.',
                'errors' => $validator->errors()
            ]);
        }

        // authentication attempt
        if (auth()->attempt($input)) {
            $token = auth()->user()->createToken('passport_token')->accessToken;

            $otp = rand(100000,900000);
            $otp_expiry_min =  10;
            $date = date('Y-m-d H:i:s');
            $currentDate = strtotime($date);
            $futureDate = $currentDate+(60*$otp_expiry_min); //Add 10 minute to the current date
            $expiry = date("Y-m-d H:i:s", $futureDate);

            User::where('id', auth()->user()->id)
            ->update([
                "otp_code" => $otp,
                "otp_type" => 1, //login validation
                "otp_login_verif" => 0,
                "otp_created_at" => $date,
                "otp_expiry_time" => $expiry
            ]);


            $link = "https://google.com";//verify email link
            $data = array(
                'full_name'=>auth()->user()->firstname." ".auth()->user()->lastname,
                'link'=> $link,
                'otp' => $otp,
                'title' => 'Verify your account',
                'email_content' => 'Please use the OTP below to verify your account',
                'otp_expiry_min' => $otp_expiry_min

            );
            Mail::send('emails.otp', $data, function($message) use ($data){
                $message->from("noreply@visarong.com", 'Visaro Nigeria');
                $message->to(auth()->user()->email);
                $message->subject('OTP Request');
            });

            return response()->json([
                'success' => true,
                'message' => 'User login succesfully, Use token to authenticate.',
                'token' => $token
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'User authentication failed.'
            ], 401);
        }
    }

    /**
     * Access method to authenticate.
     *
     * @return json
     */
    public function userDetail()
    {
        return response()->json([
            'success' => true,
            'message' => 'Data fetched successfully.',
            'data' => auth()->user()
        ], 200);
    }

    /**
     * Logout user.
     *
     * @return json
     */
    public function logout()
    {
        $access_token = auth()->user()->token();

        // logout from only current device
        $tokenRepository = app(TokenRepository::class);
        $tokenRepository->revokeAccessToken($access_token->id);

        // use this method to logout from all devices
        // $refreshTokenRepository = app(RefreshTokenRepository::class);
        // $refreshTokenRepository->revokeRefreshTokensByAccessTokenId($$access_token->id);

        return response()->json([
            'success' => true,
            'message' => 'User logout successfully.'
        ], 200);
    }
}
