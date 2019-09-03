<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DateTime;
use App\Helpers\Helper;
class ApiChartController extends Controller
{
    public function getDataByDay($dayBefore)
    {
    	$date = date('Y-m-d'); 
		$weekOfdays = array([
				'tanggal'=>date('Y-m-d'),
				'data'=>Helper::jumlahWargaPerHari(date('Y-m-d'))
			]);
		$date = new DateTime($date);

		for($i=1; $i < $dayBefore ; $i++){
		    $date->modify('-1 day');
		    $weekOfdays[] = [
		    	'tanggal'=>$date->format('Y-m-d'),
				'data'=>Helper::jumlahWargaPerHari($date->format('Y-m-d'))
		    ];
		}

		return $weekOfdays;
    }
}
