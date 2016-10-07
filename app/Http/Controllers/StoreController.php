<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Post;

use DB;

use Auth;

class StoreController extends Controller
{
    public function index(){
    	$team_id = Auth::user()->team_id;
    	$posts = DB::table('posts')->where('team_id','=',$team_id);
    	return view('store.main')
    		->with('posts',$posts);
    }
}
