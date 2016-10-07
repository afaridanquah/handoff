<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;
use App\Team;
use DB;
use Carbon;
use App\User;
use Auth;

class DashboardController extends Controller
{
    public function index(){
    	// $today = Carbon\Carbon::now()->format('Y-m-d').'%';
        $team_id = Auth::user()->team_id;
        $userType = Auth::user()->admin;
        if($userType == 'admin'){
           $posts = DB::table('posts')->orderBy('created_at','desc')->take(5)->get();
           $users = DB::table('users')->orderBy('created_at','desc')->take(5)->get();
           $team_today =DB::table('teams')->count();
           $user_today =DB::table('users')->count();
           $posted_today = DB::table('posts')->count(); 
        }else{
            $posts = DB::table('posts')->where('team_id','=',$team_id)->orderBy('created_at','desc')->take(5)->get();
            $users = DB::table('users')->where('team_id','=',$team_id)->orderBy('created_at','desc')->take(5)->get();
            $team_today =DB::table('teams')->count();
            $user_today =DB::table('users')->count();
            $posted_today = DB::table('posts')->count();
        }
        
    	return view('admin.dashboard')
    		->with('posted_today', $posted_today)
    		->with('team_today',$team_today)
    		->with('user_today',$user_today)
            ->with('posts', $posts)
            ->with('users', $users);


    	
    }
}
