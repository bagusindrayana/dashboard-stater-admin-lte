<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Models\UserLog;
use Exception;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "User";
        $link = "user";
       
        $s = '';
        $page = 1;

        if(isset($_GET['s'])){
            $s = $_GET['s'];
        }

        if(isset($_GET['page'])){
            $page = $_GET['page'];
        }

        $datas = User::where('name','like','%'.$s.'%')->orWhere('email','like','%'.$s.'%')->orderBy('created_at','DESC')->paginate(10);
        $datas->appends($_GET);
        $no = 1*$page*10-10+1;
        return view('user.index',compact('title','user','parent','link','datas','no'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Tambah Data User";
        $link = "user";
        $parent = "User";
        
        return view('user.create',compact('title','user','parent','link'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        try {
            $data = new User;
            $data->name = $request->name;
            $data->email = $request->email;
            $data->no_telepon = $request->no_telepon;
            $data->role = $request->role;
            $data->password = password_hash($request->password,PASSWORD_DEFAULT);
            $data->api_token = str_random(100);
            $data->save();
            $msg = 'Berhasil menambah data user '.$data->name;
            UserLog::create(['user_id'=>Auth::user()->id,'keterangan'=>$msg]);
            return redirect('user')->with('success_message', $msg);
        } catch (Exception $e) {
            return redirect('user')->with('error_message', 'Gagal Menghapus Data. <br> Error : '.$e->errorInfo[2]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = "Ubah Data User";
        $link = "user";
        $parent = "User";
        $data = User::find($id);
        return view('user.edit',compact('title','user','parent','link','data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = User::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->no_telepon = $request->no_telepon;
        $data->role = $request->role;
        if($request->password_baru != null){
            $data->password = password_hash($request->password_baru,PASSWORD_DEFAULT);
        }

        $data->save();

        $msg = 'Berhasil mengubah data user '.$data->name;
        UserLog::create(['user_id'=>Auth::user()->id,'keterangan'=>$msg]);
        return redirect('user')->with('success_message', $msg);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $data = User::find($id);
            $data->delete();
            $msg = 'Berhasil mengubah data user '.$data->name;
            UserLog::create(['user_id'=>Auth::user()->id,'keterangan'=>$msg]);
            return redirect('user')->with('success_message', $msg);
        } catch (Exception $e) {
            return redirect('user')->with('error_message', 'Gagal Menghapus Data');
        }
    }
}
