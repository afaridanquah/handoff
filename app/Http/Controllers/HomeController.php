<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Validator;
use User;
use Input;
use Auth;



class HomeController extends Controller
{
    public function showLogin(){
    	return view('login.main');
    }

    public function doLogin(){
    	//validate the info 
    	$rules = array(
    		'username' => 'required|max:6|min:5',
    		'password' => 'required|alphaNum|min:3'
    		);

    	$validator = validator::make(Input::all(), $rules);
    	if($validator->fails()){
    		return redirect('/login')
    			->withErrors($validator)
    			->withInput();

    	
    	}else{
    	$userdata = array(
    		'username' => Input::get('username'),
    		'password' => Input::get('password')
    		);
    	// attempt to login
    	if(Auth::attempt($userdata)){
    		return redirect()->intended('dashboard');
    	}else {        

        // validation not successful, send back to form 
        return redirect('login');
    }
    }
}


public function doLogout()
{
    Auth::logout(); // log the user out of our application
    return redirect('login'); // redirect the user to the login screen
}

}
