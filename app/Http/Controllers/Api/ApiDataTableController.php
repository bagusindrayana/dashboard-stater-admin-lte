<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DateTime;
use App\Helpers\Helper;
use App\Models\User;
use DB;

class ApiDataTableController extends Controller
{
	public function dataTable($page)
	{	
    	## Read value
		$draw = $_GET['draw'];
		$row = $_GET['start'];
		$rowperpage = $_GET['length']; // Rows display per page
		$columnIndex = $_GET['order'][0]['column']; // Column index
		$columnName = $_GET['columns'][$columnIndex]['data']; // Column name
		$columnSortOrder = $_GET['order'][0]['dir']; // asc or desc
		$searchValue = $_GET['search']['value']; // Search value

		$sql = "select * from ".$page.'s WHERE 1 ';
		switch ($page) {
			case 'user':
    		## Search 
			$searchQuery = " ";
			if($searchValue != ''){
				$searchQuery = " and (name like '%".$searchValue."%' or email like '%".$searchValue."%') or barcode like '%".$searchValue."%'";
			}


				## Total number of records without filtering
			$totalRecords = count(DB::select($sql));

				## Total number of record with filtering
			$totalRecordwithFilter = count(DB::select($sql.$searchQuery));

				## Fetch records
			$empQuery = $sql.$searchQuery." order by id ".$columnSortOrder." limit ".$row.",".$rowperpage;

			$empRecords = DB::select($empQuery);

			$data = array();
			$no = $row+1;
			foreach ($empRecords as $row) {
				$aksi = '<form method="post" action="'.url($page.'/'.$row->id) .'">
				'.csrf_field().'
				<input type="hidden" name="_method" value="delete">

				<a href="'.url($page.'/'.$row->id.'/edit').'" class="btn btn-sm btn-warning" title="Edit Data"><i class="fa fa-edit"></i></a>

				<button onclick="return confirm(&quot;Click Ok to delete User.&quot;)" type="submit" class="btn btn-sm btn-danger" title="Hapus Data"><i class="fa fa-trash"></i></button>';
				$aksi .= "</form>";

				$data[] = array( 
					"no"=>$no++,
					"name"=>$row->name,
					"email"=>$row->email,
					"no_telepon"=>$row->no_telepon,
					"role"=>($row->role == 1)?"User Admin":"User Biasa",
					"aksi"=>$aksi
				);
			}
		

				## Response
			$response = array(
				"draw" => intval($draw),
				"iTotalRecords" => $totalRecordwithFilter,
				"iTotalDisplayRecords" => $totalRecords,
				"aaData" => $data
			);

			return json_encode($response);
			break;

			default:
			abort(404);
			break;
		}
	}
}
