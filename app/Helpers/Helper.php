<?php
namespace App\Helpers;
 
use Illuminate\Support\Facades\DB;
use Auth;
use App\Models\User;
use App\Models\UserLog;


class Helper {


	public static function jumlahUser()
	{
		return User::count();
	}

	public static function userLog()
	{
		$logs = UserLog::limit(10)->orderBy('created_at','DESC')->get();
		if(Auth::user()->role == 0){
			$logs = UserLog::where('user_id',Auth::user()->id)->orderBy('created_at','DESC')->limit(10)->get();
		}

		return $logs;
	}


}