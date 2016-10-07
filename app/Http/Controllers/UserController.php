<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;
use App\Team;
use Input;
use DB;
use Validator;
use Session;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        // $users = DB::table('users')->paginate(10);
        return view('user.main')
            ->with('users',$users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teams = array();

        foreach (Team::all() as $team) {
            $teams[$team ->id] = $team->name;
        }
        return view('user.create')
            ->with('teams',$teams);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
        'team_id' =>'required',
        'username' =>'required|max:6|min:2|unique:users',
        'name' => 'required|max:100|min:2',
        'email' =>'required|email',
        'admin' =>'required',
        'password'=>'required|max:320|min:4'
        ]);

        if($validator->fails()){
            return redirect('/user/create')
            ->withInput()
            ->withErrors($validator);
            
        }

        $user = new User;
        $user->team_id = $request->team_id;
        $user->username = $request->username;
        $user->name =$request->name;
        $user->email =$request->email;
        $user->admin =$request->admin;
        $user->password=$request->password;
        $user->save();

        Session::flash('user_create','New User is created successfully');
        return redirect('user/create');


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

        $teams = array();

        foreach (Team::all() as $team) {
            $teams[$team ->id] = $team->name;
        }
        $users = User::findorfail($id);
        return view('user/edit')
            ->with('teams',$teams)
            ->with('users', $users);
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
        $user = User::findorfail($id);

       $validator = Validator::make($request->all(),[
        'team_id' =>'required',
        'username' =>'required|max:6|min:2',
        'name' => 'required|max:100|min:2',
        'email' =>'required|email',
        'admin' =>'required',
        ]);

        if($validator->fails()){
            return redirect('user/'. $user->id . '/edit')
            ->withInput()
            ->withErrors($validator);
            
        }
        $input = $request->all();
        $user->fill($input)->save();

        // $user->team_id = $request->team_id;
        // $user->username = $request->Input('username');
        // $user->name =$request->Input('name');
        // $user->email =$request->Input('email');
        // $user->admin =$request->Input('admin');
        // $user->password=$request->Input('password');
        // $user->save();

        Session::flash('user_update','Record updated successfully');
        return redirect('user/create');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teams = User::find($id);
        $teams->delete();

        Session::flash('user_deleted','Record deleted successfully');
        return redirect('user');
    }
}
