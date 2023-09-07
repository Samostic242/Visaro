<?php

namespace App\Http\Controllers\api;

use Validator;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Laravel\Passport\TokenRepository;
use Laravel\Passport\RefreshTokenRepository;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Utilities;
use Mail;
use DB;
use Auth;

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
     *    response=201,
     *    description="Successful Registration",
     *    @OA\JsonContent(
     *       @OA\Property(property="success", type="boolean", example="true"),
     *       @OA\Property(property="message", type="string", example="User registered succesfully, Use Login method to receive token."),
     *       @OA\Property(property="token", type="string", example="eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIzIiwianRpIjoiODQ3MThkNTZjZTZiYWI2OGFmNDgwZjlmNjA4NTA4NGU5M2NhY2JiMjRmZWU4ZWQzZGE0YTQ4OGQ1ZTRlM2NiN2RlNmRmN2VkYjY5ZjhjZjciLCJpYXQiOjE2NzQzNzg3MjEsIm5iZiI6MTY3NDM3ODcyMSwiZXhwIjoxNzA1OTE0NzIxLCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.d7D4ZXHxRZ8D44noKOOtzkMBlYbd8sDMQLIxwlOHc_RAqG64SbuRHWQzg7DPG9WqlKiBFF53LxLT6lQScmml5uanneTVCB9LKdzMP9WpXDS1OHklepPgdiuXaWbvH5k226uDEl1QfCL3EJoFICRQE7CW-4UCsjpP08XOiIDblc2UnPdJWW6wyWgf0xS5VGAwTRc_PzWNLIWcustebWhT9Od9blVyz_yeyQ9fRKBBScHiWvcOKwfn1dHrMDmtlJsM_B4mR-csxez9Zun05SjyhegQI2Q1Ldi1SWshi4BSBm70DS3CuKBAdP5Py9aoNHjyM-4ow_z57ozbuRqTT3-6qPbNTW85zYSAS0g_VSkla2iyhiRN_GyiLwp7-F1iqvoElU1Os63popaYUo7Dbg3JSXQGbClXlCHMCFwaofDBgfuMmz-qAdiCFoYGqkWb9iZSjz57wRUuH3HoXYpJ7QfP-YwUGKMKdyEYsYdM9wz3jHwgZHUay-2YPQHFPhRwkm3wQwWkGH4C-n4PNprOJrXiTYIJqQ95WowEq0VY8Wljr_0RAb5_cJUtjlwIfafcTrXQkY6ZQ6NFikUlRLpDUDjSl9cDvQIxFoUuzlxwVGfSzy6PL-k4m_kTWABJeYb_lDLlF5AoDVBGum6h472jbhEiIspci9R7srWUw7S")
     *        )
     *     )
     * ),
     * @OA\Response(
     *    response=402,
     *    description="Wrong credentials response",
     *    @OA\JsonContent(
     *       @OA\Property(property="success", type="boolean", example="false"),
     *       @OA\Property(property="message", type="string", example="User authentication failed."),
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
     * path="/initialize_transaction",
     * summary="Initialize a paystack transaction",
     * description="This will generate a transaction ID tie to the user account",
     * operationId="initialize_transaction",
     * tags={"Initialize Transaction"},
     * security={{"bearer_token":{}}},
     * @OA\RequestBody(
     *    required=true,
     *    description="Request body",
     *       @OA\MediaType(
     *             mediaType="multipart/form-data",
     *             @OA\Schema(
     *                 required={"transaction_type","amount"},
     *                 @OA\Property(property="transaction_type", type="string",  example="01"),
     *                 @OA\Property(property="amount", type="integer",  example="2000"),
     *             )
     *         )
     * ),
     * @OA\Response(
     *    response=200,
     *   description="Successful Transaction Initialize update",
     *     @OA\JsonContent(
     *       @OA\Property(property="success", type="boolean", example="true"),
     *       @OA\Property(property="message", type="string", example="Successful"),
     *       @OA\Property(
     *          property="data",
     *          type="object",
     *                example={
     *
     *                       "authorization_url": "https://checkout.paystack.com/ebvyeumu92eg92o",
     *                       "reference": "drqmxt6e09",
    *                         "access_code": "ebvyeumu92eg92o"
     *
     *
     *                },
     *              ),
     *
     *        )**
     *        )
     *     )
     * ),
     * ********************************************************************************************************************************
     * @OA\get(
     * path="/verify_transaction/{reference}",
     * summary="To Verify if a payment is successful",
     * description="This endpoint will return the status of any payment done on visaro",
     * operationId="verify_transaction",
     * tags={"Verify Transaction"},
     * security={{"bearer_token":{}}},
     * @OA\Parameter(
     *          name="reference",
     *          description="Transaction Reference",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="string"
     *          )
     *      ),
     * @OA\Response(
     *    response=200,
     *    description="Verify Transaction Successful Response",
     *     @OA\JsonContent(
     *       @OA\Property(property="success", type="boolean", example="true"),
     *       @OA\Property(property="message", type="string", example="Success"),
     *       @OA\Property(
     *          property="data",
     *          type="object",
     *                example={
     *                 {
     *                     "amount": "100",
     *                     "created_at": "2023-08-04 14:12:49",
     *                     "trans_type": "BVN Charge",
     *                     "visaro_status": "Successful",
     *                     "paystack_status": "success"
     *                 }
     *                },
     *              ),
     *
     *        )
     *     )
     * ),
     * ********************************************************************************************************************************
     * @OA\Post(
     * path="/bvn_verification",
     * summary="BVN Verification",
     * description="This endpoint will be used to verify the BVN of the user",
     * operationId="bvn_verification",
     * tags={"BVN Verification"},
     * security={{"bearer_token":{}}},
     * @OA\RequestBody(
     *    required=true,
     *    description="Request body",
     *       @OA\MediaType(
     *             mediaType="multipart/form-data",
     *             @OA\Schema(
     *                 required={"bvn","payment_reference"},
     *                 @OA\Property(property="bvn", type="string",  example="54651333604"),
     *                 @OA\Property(property="payment_reference", type="integer",  example="482jfjd849"),
     *             )
     *         )
     * ),
     * @OA\Response(
     *    response=200,
     *   description="Successful BVN Verification",
     *     @OA\JsonContent(
     *       @OA\Property(property="success", type="boolean", example="true"),
     *       @OA\Property(property="message", type="string", example="BVN Verification was successful"),
     *       @OA\Property(
     *          property="data",
     *          type="object",
     *                example={
     *
     *                       "first_name": "TEST",
     *                       "middle_name": "test",
     *                       "last_name": "test",
     *                       "phone_1": "09082838483",
     *                       "phone_2": "08028323323",
     *                       "address": "yaba",
     *                       "state_of_residence": {
     *                       "id": 803,
     *                       "description": "Lagos"
     *                       },
     *                       "lga_of_residence": {
     *                       "id": 1,
     *                       "description": "yaba"
     *                       }
     *
     *
     *                },
     *              ),
     *
     *        )**
     *        )
     *     )
     * ),
     * *******************************************************************************************************************************
     * * @OA\Post(
     * path="/profile_update",
     * summary="To Update User Profile",
     * description="This update User profile",
     * operationId="profile_update",
     * tags={"Profile Update"},
     * security={{"bearer_token":{}}},
     * @OA\RequestBody(
     *    required=true,
     *    description="Request body",
     *    @OA\MediaType(
     *             mediaType="multipart/form-data",
     *             @OA\Schema(
     *
     *                 @OA\Property(property="account_type", type="integer",  example="1"),
     *                 @OA\Property(property="phone_1", type="string",  example="08091270000"),
     *                 @OA\Property(property="phone_2", type="string",  example="08051200000"),
     *                 @OA\Property(
     *                     description="Profile Pics",
     *                     property="profile_pics",
     *                     type="string",
     *                     format="binary",
     *                 ),
     *
     *             )
     *         ),
     * ),
     * @OA\Response(
     *    response=200,
     *   description="Successful profile update",
     *     @OA\JsonContent(
     *       @OA\Property(property="success", type="boolean", example="true"),
     *       @OA\Property(property="message", type="string", example="Profile update was successful"),
     *       @OA\Property(
     *          property="data",
     *          type="object",
     *                example={
     *
     *                       "account_type": {
     *                        "id": 1,
     *                        "description" : "Personal"
     *                       },
     *                       "first_name": "TEST",
     *                       "middle_name": "test",
     *                       "last_name": "test",
     *                       "phone_1": "09082838483",
     *                       "phone_2": "08028323323",
     *                       "address": "yaba",
     *                       "state_of_residence": {
     *                       "id": 803,
     *                       "description": "Lagos"
     *                       },
     *                       "lga_of_residence": {
     *                       "id": 1,
     *                       "description": "yaba"
     *                       },
     *                       "profile_pics": "http://localhost:8181/uploads/profile_pics/test_pics.jpg"
     *
     *
     *                },
     *              ),
     *
     *        )**
     *        )
     *     )
     * ),
     * *******************************************************************************************************************************
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
     *                 required={"account_type","profile_pics","business_name","business_address","business_email","country_of_origin","port_of_origin","certificate_of_incoporation","memart","acfta_certificate"},
     *                 @OA\Property(property="business_name", type="string",  example="Smart Pay Limited"),
     *                 @OA\Property(property="business_address", type="string",  example="No. 5 Bourdilon Road Ikoyi"),
     *                 @OA\Property(property="business_email", type="string",  example="info@smartpay.com"),
     *                 @OA\Property(property="country_of_origin", type="string", example="NG"),
     *                 @OA\Property(property="port_of_origin", type="string", example="803"),
     *                 @OA\Property(property="account_type", type="integer",  example="2"),
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
     *
     *                       "business_name":"Smart Pay Limited",
     *                       "business_address":"No. 5 Bourdilon Road Ikoyi",
     *                       "business_email":"info@smartpay.com",
     *                       "country_of_origin":"NG",
     *                       "port_of_origin":"803",
     *
     *
     *                },
     *              ),
     *
     *        )**
     *        )
     *     )
     * ),
     * **********************************************************************************************************************************
     * @OA\GET(
     * path="/profile_details",
     * summary="To get user profile details",
     * description="This will get all information about a user profile",
     * operationId="profile_details",
     * tags={"Profile Details"},
     * security={{"bearer_token":{}}},
     * @OA\Response(
     *    response=200,
     *   description="Successful profile update",
     *     @OA\JsonContent(
     *       @OA\Property(property="success", type="boolean", example="true"),
     *       @OA\Property(property="message", type="string", example="Success"),
     *       @OA\Property(
     *          property="data",
     *          type="object",
     *                example={
     *                       "account_type": {
     *                        "id": 1,
     *                        "description" : "Personal"
     *                       },
     *                       "first_name": "TEST",
     *                       "middle_name": "test",
     *                       "last_name": "test",
     *                       "phone_1": "09082838483",
     *                       "phone_2": "08028323323",
     *                       "address": "yaba",
     *                       "state_of_residence": {
     *                       "id": 803,
     *                       "description": "Lagos"
     *                       },
     *                       "lga_of_residence": {
     *                       "id": 1,
     *                       "description": "yaba"
     *                       },
     *                       "profile_pics": "http://localhost:8181/uploads/profile_pics/test_pics.jpg",
     *                       "wallet": {
     *                         "visaro_balance": "0.00",
     *                         "visaro_credit": "0.00",
     *                         "status": "Active"
     *                       },
     *
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
     * @OA\Response(
     *    response=200,
     *    description="List of Country Successful Response",
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
     *    description="List of region Successful Response",
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
      * @OA\get(
     * path="/balance_enquiry",
     * summary="To get user balance",
     * description="This end point will return the account balance of the user",
     * operationId="balance_enquiry",
     * tags={"Balance Enquiry"},
     * security={{"bearer_token":{}}},
     * @OA\Response(
     *    response=200,
     *    description="Balance Enquiry Successful Response",
     *     @OA\JsonContent(
     *       @OA\Property(property="success", type="boolean", example="true"),
     *       @OA\Property(property="message", type="string", example="Success"),
     *       @OA\Property(
     *          property="data",
     *          type="object",
     *                example={
     *                 "wallet": {
     *                         "visaro_balance": "47000.00",
     *                         "visaro_credit": "300.00",
     *                         "status": "Active"
     *                       },
     *
     *                },
     *              ),
     *
     *        )
     *     )
     * ),
     ** ********************************************************************************************************************************
     * @OA\get(
     * path="/username_check/{user_email}",
     * summary="Get visaro user info",
     * description="This endpoint is used in getting the user info before fund transfer is done e.g user_email = esekelvin24@gmail.com ",
     * operationId="username_check",
     * tags={"Username Check"},
     * security={{"bearer_token":{}}},
     * @OA\Parameter(
     *          name="user_email",
     *          description="User Email",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="string"
     *          )
     *      ),
     * @OA\Response(
     *    response=200,
     *    description="Username Check Successful Response",
     *     @OA\JsonContent(
     *       @OA\Property(property="success", type="boolean", example="true"),
     *       @OA\Property(property="message", type="string", example="Success"),
     *       @OA\Property(
     *          property="data",
     *          type="object",
     *                example={
     *                 {
     *                     "full_name": "John Thomas Usman",
     *                 }
     *                },
     *              ),
     *
     *        )
     *     )
     * ),
     *
     * /****************************************************************************************************************
    * @OA\get(
    * path="/dashboard",
    * summary="To get application dashboard",
    * description="This end point will return the application dashboard when the onboarding has been completed by the user",
    * operationId="dashboard",
    * tags={"Dashboard"},
    * security={{"bearer_token":{}}},
    * @OA\Response(
    *    response=200,
    *    description="User Dashboard Successful Response",
    *     @OA\JsonContent(
    *       @OA\Property(property="success", type="boolean", example="true"),
    *       @OA\Property(property="message", type="string", example="Success"),
    *       @OA\Property(
    *          property="data",
    *          type="object",
    *                example={
    *                     "onboarding": {
    *                        "bvn_verification": true,
    *                        "profile_picture_upload": true,
    *                        "setup_trans_pin": true,
    *                        "account_type": "Personal Account",
    *                        "phone_no_verification": false
    *                    },
    *                   "wallet": {
    *                   "visaro_balance": "37000.00",
    *                   "visaro_credit": "2000.00",
    *                   "status": "Active"
    *                   },
    *                   "bnpl_services": {
    *                   0: {
    *                       "bnpl_service_name": "Aviation",
    *                       "thumbnails": "http://localhost:8181/uploads/bnpl_services/airplane-sunset.jpg",
    *                       "display_img": "http://localhost:8181/uploads/bnpl_services/airplane-sunset.jpg"
    *                      },
    *                   1: {
    *                       "bnpl_service_name": "HMO",
    *                       "thumbnails": "http://localhost:8181/uploads/bnpl_services/health.jpg",
    *                       "display_img": "http://localhost:8181/uploads/bnpl_services/health.jpg"
    *                      },
    *                   2: {
    *                       "bnpl_service_name": "School Fee",
    *                       "thumbnails": "http://localhost:8181/uploads/bnpl_services/books.jpg",
    *                       "display_img": "http://localhost:8181/uploads/bnpl_services/books.jpg"
    *                      }
    *                   },
    *                   "activities_log": {
    *                   0: {
    *                       "activity_description": "Your wallet was created successfully",
    *                       "created_at": "2023-08-04 11:09:50"
    *                      }
    *                    },
    *                    "registered_hospital": {
       *                 0: {
       *                       "hospital_name": "Lagos State University Teaching Hospital (LASUTH)",
       *                       "thumbnail": "http://localhost:8181/uploads/hospitals/lasuth.jpg",
       *                       "display_img": "http://localhost:8181/uploads/hospitals/lasuth.jpg"
       *                   },
       *                  1: {
       *                       "hospital_name": "National Orthopaedic Hospital",
       *                       "thumbnail": "http://localhost:8181/uploads/hospitals/noi-1959-57b675f19dbf3.jpg",
       *                       "display_img": "http://localhost:8181/uploads/hospitals/noi-1959-57b675f19dbf3.jpg"
       *                    }
    *                    },
    *
    *                },
    *              ),
    *
    *        )
    *     )
    * ),
    *
    * *********************************************************************************************************/




    public function register(Request $request)
    {
        $input = $request->only(['email', 'password']);

        $validate_data = [
            'email' => 'required|email',
            'password' => 'required|strong_password',
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

        $otp = rand(1000,9000);
        $otp_expiry_min =  10;
        $date = date('Y-m-d H:i:s');
        $currentDate = strtotime($date);
        $futureDate = $currentDate+(60*$otp_expiry_min); //Add 10 minute to the current date
        $expiry = date("Y-m-d H:i:s", $futureDate);

         $user = new User;
         /*$user->firstname = $input['firstname'];
         $user->middlename = $input['middlename'];
         $user->lastname = $input['lastname'];*/
         $user->email = $input['email'];
         $user->password = Hash::make($input['password']);
         $user->otp_code = $otp;
         $user->otp_type = 1; //login validation
         $user->otp_login_verif = 0;
         $user->otp_created_at = $date;
         $user->otp_expiry_time = $expiry;
         $user->save();

         //Set Role
         DB::table('users_roles')->insert([
            "user_id" => $user->id,
            "role_id" => 2, //User Role
            "description" => "User"
         ]);

        Utilities::log_this_activity("Registration was successful", $user->id);

         // authentication attempt
         if (auth()->attempt($input)) {
            $token = auth()->user()->createToken('passport_token')->accessToken;
         }



            $link = "https://google.com";//verify email link
            $data = array(
                'full_name'=>auth()->user()->firstname." ".auth()->user()->lastname,
                'link'=> $link,
                'otp' => $otp,
                'title' => 'Registration Confirmation: One-Time Password (OTP)',
                'email_content' => "Congratulations! Your registration with Visaro Nigeria is now complete. To finalize your profile, kindly input the One-Time Password (OTP) provided below",


            );

            try{
                Mail::send('emails.registration', $data, function($message) use ($data){
                    $message->from("noreply@visarong.com", 'Visaro Nigeria');
                    $message->to(auth()->user()->email);
                    $message->subject('Visaro Registration');
                });
            }catch(\Exception $e){
                // Get error here
            }

        return response()->json([
            'success' => true,
            'message' => 'User registered succesfully, Use Login method to receive token.',
            'token' => $token
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

            $otp = rand(1000,9000);
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

            try{
                Mail::send('emails.otp', $data, function($message) use ($data){
                    $message->from("noreply@visarong.com", 'Visaro Nigeria');
                    $message->to(auth()->user()->email);
                    $message->subject('OTP Request');
                });
            }catch(\Exception $e){
                // Get error here
            }


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


    public function profile_update(Request $request)
    {
        $rules = [
            "phone_1" => "sometimes",
            "phone_2" => "sometimes",
            "account_type" => "sometimes|integer",
            "profile_pics" => 'sometimes|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1300,max_height=1300',
        ];

        $this->validate($request, $rules);

        ;

        //Check if BVN has been verified

        $check =  DB::table('profile')->where('user_id', Auth::user()->id)->get();

        if(count($check) > 0)
        {
            if($check[0]->bvn_verified ==1)
            {


                if(isset($request->phone_1) && $request->phone_1 != "")
                {
                   $insert["bvn_phone_number_1"] = $request->phone_1;
                }


                if(isset($request->phone_2) && $request->phone_2 != "")
                {
                    $insert["bvn_phone_number_2"] = $request->phone_2;
                }

                if (isset($request->account_type) && $request->account_type != 1)
                {
                    return response()->json([
                        'success' => false,
                        'message' => 'Invalid account type for a personal account',

                    ], 406);
                }
                if($check[0]->account_type =="")//Account Type can only be updated once on profile update
                {
                    $insert["account_type"] = $request->account_type;
                }


                if ($request->hasFile('profile_pics'))
                {
                    $file = $request->file('profile_pics');
                    $extension = $request->file('profile_pics')->getClientOriginalExtension();
                    $filename = Auth::user()->id.'_'.Auth::user()->email . '_profile_pics.' . $extension; // renameing image
                    $destinationPath = 'uploads/profile_pics/';//its refers project/public/uploads/jsa directory
                    //$work_permit_log->jsa_upload = $filename;
                    $upload_success = $file->move($destinationPath, $filename);
                    $insert["profile_pics_file_name"] = $filename;
                }

                DB::table('profile')->where('user_id',Auth::user()->id)->update($insert);

                $check_bvn = DB::table('profile as p')
                ->selectRaw('bvn_first_name, bvn_middle_name, bvn_last_name, bvn_phone_number_1,profile_pics_file_name,
                 bvn_phone_number_2, bvn_residential_address, bvn_state_of_residence,
                 bvn_lga_of_residence, r.description as stateOfResidence, l.description as lgaOfResidence,p.bvn_verified')
                ->whereIn('bvn_verified',[0,1])
                ->where('user_id', Auth::user()->id)
                ->leftjoin('lga as l','l.id','p.bvn_lga_of_residence')
                ->leftjoin('region as r','r.id','p.bvn_state_of_residence')
                ->get();

                Utilities::log_this_activity("Profile update was successful");

                return response()->json([
                    'success' => true,
                    'message' => 'Profile update was successful',
                    'data' => [
                        "account_type" => [
                           "id" => 1,
                           "description" => "Personal"
                        ],
                        "first_name" => $check_bvn[0]->bvn_first_name,
                        "middle_name" => $check_bvn[0]->bvn_middle_name,
                        "last_name" => $check_bvn[0]->bvn_last_name,
                        "phone_1" => $check_bvn[0]->bvn_phone_number_1,
                        "phone_2" => $check_bvn[0]->bvn_phone_number_2,
                        "address" => $check_bvn[0]->bvn_residential_address,
                        "state_of_residence" => ["id" => (int)$check_bvn[0]->bvn_state_of_residence, "description" => $check_bvn[0]->stateOfResidence],
                        "lga_of_residence" => ["id" => (int)$check_bvn[0]->bvn_lga_of_residence, "description" => $check_bvn[0]->lgaOfResidence],
                        "profile_pics" => url('/uploads/profile_pics/'.$check_bvn[0]->profile_pics_file_name)
                    ]

                ], 201);


            }else
            {
                return response()->json([
                    'success' => false,
                    'message' => 'This user BVN verificaton was not successful, kindly contact admin',

                ], 406);
            }

        }else
        {
            return response()->json([
                'success' => false,
                'message' => 'Profile Not Found, Please ensure you have done BVN verification',

            ], 406);
        }

    }

    public function userDetail()
    {
        return response()->json([
            'success' => true,
            'message' => 'Data fetched successfully.',
            'data' => auth()->user()
        ], 200);
    }


    /**
     ******************************************************************************************************************************
     * @OA\Post(
     * path="/logout",
     * summary="Logout User",
     * description="Logout User and Destroy Access Token",
     * operationId="logout",
     * tags={"Logout"},
     * security={{"bearer_token":{}}},
     * @OA\Response(
     *    response=200,
     *    description="Successful Logout",
     *    @OA\JsonContent(
     *       @OA\Property(property="success", type="boolean", example="true"),
     *       @OA\Property(property="message", type="string", example="User logout successfully"),
     *       )
     *     )
     * )
     * ********/



     public function logout()
     {
         // Check if the user is authenticated
         if (Auth::check()) {
             // Get the authenticated user
             $user = Auth::user();

             // Revoke the user's access token
             $user->token()->revoke();

             return response()->json([
                 'success' => true,
                 'message' => 'User logged out successfully.',
             ], 200);
         }

         return response()->json([
             'success' => false,
             'message' => 'User is not authenticated.',
         ], 401);
     }

}
