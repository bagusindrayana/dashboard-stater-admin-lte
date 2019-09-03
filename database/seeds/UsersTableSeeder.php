<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

    	$data = array(
    		array(
    			'name' => 'admin', 
    			'email' => 'admin@email.com',
    			'no_telepon' => '0836367333',
                'role'      => '1',
    			'password' => '$2y$10$8SZTOXjZjIIwqDB4L/Q.kOiERrheHctF809U2AP/4Cd0mk6ySc1iy',
    			));

    	DB::table('users')->insert($data);
    }
}
