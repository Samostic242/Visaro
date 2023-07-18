<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use DB;
use Auth;

class CheckUserStatus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $user = DB::table('users')->where('id', Auth::user()->id)->get();

        if ($user[0]->otp_login_verif == 0) { //Login OTP needs to be cleared

            return response()->json([
                'success'=>false,
                'message'=>'Your Login OTP is not yet verified',
            ], 406);
        }

        /*
        if ($user[0]->otp_phone_verif == 0) { //Login OTP needs to be cleared

            return response()->json([
                'success'=>false,
                'message'=>'Your Login OTP is not yet verified',
            ], 406);
        }
        */








        return $next($request);
    }
}
