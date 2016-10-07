<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

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

        User::create(array(
        	'name' => 'Akshay Raj',
        	'username' => 'ar171w',
        	'email' => 'msafaridanquah@gmail.com',
        	'password' => 'amen',
            'team_id' => 1,
        	'admin' => 1,
        	));

        User::create(array(
        	'name' => 'Varun Kumar',
        	'username' => 'vk2617',
        	'email' => 'msafaridanquah@gmail.com',
        	'password' => 'amen',
            'team_id' => 1,
        	'admin' => 'admin',
        	));
        User::create(array(
            'name' => 'Narender Yadav',
            'username' => 'ny939h',
            'email' => 'msafaridanquah@gmail.com',
            'password' => 'amen',
            'team_id' => 1,
            'admin' => 0,
            ));
    }
}
