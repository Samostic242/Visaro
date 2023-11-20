<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use Illuminate\Support\Str;
use App\Email_notification;
use App\user;
use Mail;
use Hash;


class Utilities
{


    public static function log_this_activity($name, $id = null)
    {
       DB::table('activity_log')->insert([
         "activity_description" => $name,
         "created_at" => NOW(),
         "created_by" => $id == null ? Auth::user()->id: $id
       ]);
    }


    public static function verify_transaction_pin($enteredPin)
    {
        $hashedPinFromDatabase = Auth::user()->trans_pin;

        // Check if the entered pin matches the saved pin hash
        if (Hash::check($enteredPin, $hashedPinFromDatabase)) {
            return response()->json([
                'success'=> true,
                'message'=> "Success",
            ], 200);
        } else {
            // Log pin failed trials counte
            return response()->json([
                'success'=> false,
                'message'=> "Invalid Transaction Pin",
            ], 406);
        }
    }

    public static function verify_password($enteredPassword)
    {
        $savedPasswordHash = Auth::user()->password; // Assuming $user is the user model

        // Check if the entered password matches the saved password hash
        if (Hash::check($enteredPassword, $savedPasswordHash)) {
            return true;
        } else {
            // Log password failed trials counter


           return false;
        }
    }

    public static function getnextid($tablename)
    {
        $id = 0;

        $numrows = DB::table('op_gendata')
            ->where('table_name', $tablename)
            ->increment('table_id');

        if($numrows==0){

            $table_val [] =
            [
                    'table_name' => $tablename,
                    'table_id' => '1'
            ];

            DB::table('op_gendata')->insert($table_val);
        }

        $id = DB::table('op_gendata')->where('table_name', $tablename)->first()->table_id;

        //result count when it reaches
        if($id > 999998){

            $numrows = DB::table('op_gendata')
            ->where('table_name', $tablename)
            ->increment('table_id');
        }

        return $id;
     }

     public static function generateUniqueTransactionId($length) {
        $transactionId = '';

        $characters = '0123456789';
        $charactersLength = strlen($characters);

        // Generate the transaction ID with the specified length
        for ($i = 0; $i < $length; $i++) {
            $transactionId .= $characters[rand(0, $charactersLength - 1)];
        }

        return $transactionId;
    }

    public static function paddZeros($id, $length)
	{
		$data = "";
		$zeros = "";
		$rem_len = $length - strlen($id);
		if($rem_len > 0)
		{
			for($i=0; $i<$rem_len; $i++)
			{
				$zeros.="0";
			}
			$data = $zeros.$id;
		}
		else
		{
			$data = $id;
		}
		return $data;
	}

    public static function deleteAllPermanently($id,$table_name, $table_id)
    {
       $id = rtrim($id,",");
       DB::table($table_name)->whereIn($table_id,explode(",",$id))->delete();

    }







}
