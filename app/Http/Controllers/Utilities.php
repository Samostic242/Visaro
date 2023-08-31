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
            return true;

        } else {


            // Log pin failed trials counter


           return false;
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
    public static function GenUniqID($c,$d)
    {
        $myclass = new Utilities;
        ///Explode Date and Time 2Get 14 digits  e.g  HHMMSS+YYYYMMDD
        list($GPIregYear,$GPIregMonth,$GPIregDay) = explode("-",$c);
        list($GPIregTime0,$GPIregTime1,$GPIregTime2) = explode(':',$d);
        //Put the 14 digits 2gether
        $GPItokenT = $GPIregTime0.''.$GPIregTime1.''.$GPIregTime2;
        /////////////////////////////////////////////////////////
        $GPItokenD = $GPIregYear.''.$GPIregMonth.''.$GPIregDay;
        //$dbobject = new dbobject();
        $GPItokenD2 = $myclass->getuniqueid4($GPIregYear,$GPIregMonth,$GPIregDay);
        ///add the 14 digits + the 12 digits ==> 25 digits
        $GPItoken = $GPItokenD2.''.$GPItokenT;
            return $GPItoken;
        //return $GPItokenT;
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
    public function getuniqueid4($y, $m, $d)
    {

    $month_year = array ('01' => '890',
        '02' => '8459',
        '03' => '7638',
        '04' => '7906',
        '05' => '5427',
        '06' => '3565',
        '07' => '1384',
        '08' => '3403',
        '09' => '4314',
        '10' => '4686',
        '11' => '4692',
        '12' => '2025');
    $year = array('2009' => '2488',
        '2010' => '4577',
        '2011' => '7777',
        '2012' => '8733',
        '2013' => '4300',
        '2014' => '3333',
        '2015' => '0000',
        '2016' => '6666',
        '2017' => '9999',
        '2018' => '1233',
        '2019' => '3211',
        '2020' => '4311',
        '2021' => '5211',
        '2022' => '1466',
        '2023' => '2466',
        '2024' => '3579',
        '2025' => '7688',
        '2026' => '5555',
        '2027' => '7707',
        '2028' => '7733',
        '2029' => '4444',
        '2030' => '9622',
        '2031' => '9099',
        '2032' => '8303',
        '2033' => '3498',
        '2034' => '2222',
        '2035' => '1111');

    $day = array('01' => '250',
        '02' => '231',
        '03' => '723',
        '04' => '128',
        '05' => '454',
        '06' => '657',
        '07' => '875',
        '08' => '908',
        '09' => '119',
        '10' => '343',
        '11' => '228',
        '12' => '388',
        '13' => '882',
        '14' => '787',
        '15' => '334',
        '16' => '545',
        '17' => '675',
        '18' => '775',
        '19' => '298',
        '20' => '590',
        '21' => '179',
        '22' => '324',
        '23' => '446',
        '24' => '669',
        '25' => '000',
        '26' => '048',
        '27' => '059',
        '28' => '036',
        '29' => '087',
        '30' => '203',
        '31' => '454');

    $unique_id4 = $year[$y].$month_year[$m].$day[$d];
    return $unique_id4;
    }
    public static function deleteAllPermanently($id,$table_name, $table_id)
    {
       $id = rtrim($id,",");
       DB::table($table_name)->whereIn($table_id,explode(",",$id))->delete();

    }







}
