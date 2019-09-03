<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Kreait\Firebase\Database;
use App\User;
use Exception;
class FirebaseController extends Controller
{   
    public $auth;
    public $firebase;
    function __construct($foo = null)
    {
        $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/catat-warga.json');
        $this->firebase = (new Factory)
            ->withServiceAccount($serviceAccount)
            ->asUser('my-service-worker')
            ->create();
            $this->auth = $this->firebase->getAuth();
    }
    public function index(){
        
        $db = $this->firebase->getDatabase();
        
        foreach (User::all() as $key => $value) {
        
        	$userProperties = [
                'email' => $value->email,
                'password' => str_replace('@gmail.com', '1234', $value->email),
            ];

            $createdUser = $this->auth->createUser($userProperties);
            User::find($value->id)->update(['uid'=>$createdUser->uid]);
            $db->getReference('users/'.$createdUser->uid)
               ->set([
                   'name' => $value->name,
                   'email' => $value->email,
                   'status' => 'offline',
                  ]);
        	
	        	
        }
        $users = $this->auth->listUsers($defaultMaxResults = 1000, $defaultBatchSize = 1000);
        $arr = [];
        foreach ($users as $key => $value) {
            $arr[] = $value;
        }
        dd($arr);
      
    }

    public function listUser()
    {   
       
        $users = $this->auth->listUsers($defaultMaxResults = 1000, $defaultBatchSize = 1000);
        foreach ($users as $key => $value) {
            dd($value);
        }
        
    }
}
