<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\User;
use App\Models\DataWarga;
use App\Models\Galeri;
use App\Models\UserLog;
class ApiHelperController extends Controller
{
    public static function jumlahKecamatan()
	{
		return Kecamatan::count();
	}

	public static function jumlahKelurahan()
	{
		return Kelurahan::count();
	}

	public static function jumlahUser()
	{
		return User::count();
	}

	public static function jumlahWarga()
	{
		return DataWarga::count();
	}

	public static function jumlahWargaPerHari($hari)
	{
		return DataWarga::whereDate('created_at',$hari)->count();
	}

	public static function userLog(Request $request)
	{	
		$token = $request->bearerToken();
        $user = User::where('api_token',$token)->first();
		$logs = UserLog::limit(10)->orderBy('created_at','DESC')->get();
		if($user->role == 0){
			$logs = UserLog::where('user_id',$user->id)->orderBy('created_at','DESC')->limit(10)->get();
		}

		return $logs;
	}

	public static function statistik($hari)
	{
		$data = [
			'kecamatan'=>Kecamatan::count(),
			'kelurahan'=>Kelurahan::count(),
			'user'=>User::count(),
			'warga'=>DataWarga::count(),
			'warga_hari_ini'=>DataWarga::whereDate('created_at',$hari)->count()
		];

		return response()->json($data, 200);
	}

	public static function galeri()
	{
		$galeris = Galeri::orderBy('order_index','ASC')->get();
		return response()->json($galeris, 200);
	}
}
