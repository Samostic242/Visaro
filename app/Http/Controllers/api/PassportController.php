<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Utilities;
use App\Http\Integrations\Trips\Requests\GetTokenRequest;
use App\Http\Integrations\Trips\TripsConnection;
use App\Models\User;
use Auth;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Mail;
use Saloon\Http\Response;
use Validator;

class PassportController extends Controller
{

    /**
     * Register user.
     *
     * @return json
     */

    /****************************************************************************************************************
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


    public function refreshToken(Request $request)
    {
    }


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
        if ($check_if_exist > 0) {
            return response()->json([
                'success' => false,
                'message' => 'User already exist'
            ], 406);
        }

        $otp = rand(1000, 9000);
        $otp_expiry_min = 10;
        $date = date('Y-m-d H:i:s');
        $currentDate = strtotime($date);
        $futureDate = $currentDate + (60 * $otp_expiry_min); //Add 10 minute to the current date
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
            // Generate an access token
            $token = auth()->user()->createToken('passport_token')->accessToken;

            // Generate a refresh token (createToken again)
            $refreshToken = auth()->user()->createToken('passport_refresh_token')->accessToken;
        }


        $link = "https://google.com"; //verify email link
        $data = array(
            'full_name' => auth()->user()->firstname . " " . auth()->user()->lastname,
            'link' => $link,
            'otp' => $otp,
            'title' => 'Registration Confirmation: One-Time Password (OTP)',
            'email_content' => "Congratulations! Your registration with Visaro Nigeria is now complete. To finalize your profile, kindly input the One-Time Password (OTP) provided below",


        );

        try {
            Mail::send('emails.registration', $data, function ($message) use ($data) {
                $message->from("noreply@visarong.com", 'Visaro Nigeria');
                $message->to(auth()->user()->email);
                $message->subject('Visaro Registration');
            });
        } catch (\Exception $e) {
            // Get error here
        }

        return response()->json([
            'success' => true,
            'message' => 'User registered succesfully, Use Login method to receive token.',
            'token' => $token,
            'refresh_token' => $refreshToken
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

            // Generate an access token
            $token = auth()->user()->createToken('passport_token')->accessToken;

            // Generate a refresh token (createToken again)
            $refreshToken = auth()->user()->createToken('passport_refresh_token')->accessToken;


            $otp = rand(1000, 9000);
            $otp_expiry_min = 10;
            $date = date('Y-m-d H:i:s');
            $currentDate = strtotime($date);
            $futureDate = $currentDate + (60 * $otp_expiry_min); //Add 10 minute to the current date
            $expiry = date("Y-m-d H:i:s", $futureDate);

            User::where('id', auth()->user()->id)
                ->update([
                    "otp_code" => $otp,
                    "otp_type" => 1, //login validation
                    "otp_login_verif" => 0,
                    "otp_created_at" => $date,
                    "otp_expiry_time" => $expiry
                ]);


            $link = "https://google.com"; //verify email link
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


            return response()->json([
                'success' => true,
                'message' => 'User login succesfully, Use token to authenticate.',
                'token' => $token,
                'refresh_token' => $refreshToken
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

        $this->validate($request, $rules);;

        //Check if BVN has been verified

        $check = DB::table('profile')->where('user_id', Auth::user()->id)->get();

        if (count($check) > 0) {
            if ($check[0]->bvn_verified == 1) {


                if (isset($request->phone_1) && $request->phone_1 != "") {
                    $insert["bvn_phone_number_1"] = $request->phone_1;
                }


                if (isset($request->phone_2) && $request->phone_2 != "") {
                    $insert["bvn_phone_number_2"] = $request->phone_2;
                }

                if (isset($request->account_type) && $request->account_type != 1) {
                    return response()->json([
                        'success' => false,
                        'message' => 'Invalid account type for a personal account',

                    ], 406);
                }
                if ($check[0]->account_type == "") //Account Type can only be updated once on profile update
                {
                    $insert["account_type"] = $request->account_type;
                }


                if ($request->hasFile('profile_pics')) {
                    $file = $request->file('profile_pics');
                    $extension = $request->file('profile_pics')->getClientOriginalExtension();
                    $filename = Auth::user()->id . '_' . base64_encode(Auth::user()->email) . '_profile_pics.' . $extension; // renameing image
                    $destinationPath = 'uploads/profile_pics/'; //its refers project/public/uploads/jsa directory
                    //$work_permit_log->jsa_upload = $filename;
                    $upload_success = $file->move($destinationPath, $filename);
                    $insert["profile_pics_file_name"] = $filename;
                }

                DB::table('profile')->where('user_id', Auth::user()->id)->update($insert);

                $check_bvn = DB::table('profile as p')
                    ->selectRaw('bvn_first_name, bvn_middle_name, bvn_last_name, bvn_phone_number_1,profile_pics_file_name,
                 bvn_phone_number_2, bvn_residential_address, bvn_state_of_residence,
                 bvn_lga_of_residence, r.description as stateOfResidence, l.description as lgaOfResidence,p.bvn_verified')
                    ->whereIn('bvn_verified', [0, 1])
                    ->where('user_id', Auth::user()->id)
                    ->leftjoin('lga as l', 'l.id', 'p.bvn_lga_of_residence')
                    ->leftjoin('region as r', 'r.id', 'p.bvn_state_of_residence')
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
                        "profile_pics" => url('/uploads/profile_pics/' . $check_bvn[0]->profile_pics_file_name)
                    ]

                ], 201);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'This user BVN verificaton was not successful, kindly contact admin',

                ], 406);
            }
        } else {
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

    public function testHttp()
    {

        $name = "maxwell";
        $trips = new TripsConnection();
        $response = $trips->send(new GetTokenRequest($name, 3));
        $response->onError(function (Response $resp) {
            Log::info('token request', [$resp]);
            return respondError('01', "Attempt to authenticate process failed", $resp);
        });
        $response = (object)$response->json();
        $data = [
//            "token" => $response->Token,
            "url" => "https://tripswebwidget.staging.vggdev.com/?MerchantCode={$response->MerchantCode}&MerchantHash={$response->Token}&CustomerName={$response->ExtraData['CustomerName']}&CustomerId={$response->ExtraData['CustomerIdentifier']}",
        ];
        return respondSuccess("Authorization initialized successfully", $data);
    }
}
