<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use DB;
use Auth;

class OnBoardingCheck
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
        $check =  DB::table('profile')->where('user_id', Auth::user()->id)->get();

       if(count($check) < 1)
       {
        return response()->json([
            'success'=>false,
            'message'=>'Your onboarding process is not completed',
        ], 406);
       }

        return $next($request);
    }
}
