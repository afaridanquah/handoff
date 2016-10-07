<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;

use Session;

use App\Team;

use App\Http\Requests;

use Gate;
use User;
use Auth;

class TeamController extends Controller
{
    public function index(){
    	$teams = Team::all();
    	return view('team.main')
    		->with('teams',$teams);
    }

    public function create(){
        // $this->authorize('show-team', $teams);
    	return view('team.create');
    }

    public function store(Request $request){
    	$validator = Validator::make($request->all(), [
    			'name'=>'required|max:80|min:3',
    			'team_dl'=>'required|email'
    		]);
    	if($validator->fails()){
    		return redirect('team/create')
    			->withInput()
    			->withErrors($validator);
    	}

    	$team = new Team;
    	$team->name = $request->name;
    	$team->team_dl = $request->team_dl;
    	$team->save();

    	Session::flash('team_created', 'New Team Created ');
    	return redirect('team/create');
    	
    }

    public function edit($id){
    	$teams = Team::findorfail($id);
    	return view('team/edit')
    		->with('teams', $teams);
    }

    public function update(Request $request,$id){
    	$validator = Validator::make($request->all(), [
    			'name'=>'required|max:80|min:3',
    			'team_dl'=>'required|email'

    		]);
    	if($validator->fails()){
    		return redirect('team/'. $team->id . '/edit')
    			->withInput()
    			->withErrors($validator);
    	}

    	$team = Team::find($id);
    	$team->name = $request->Input('name');
    	$team->team_dl=$request->Input('team_dl');
    	$team->save();

    	Session::flash('team_updated', 'Record updated successfully ');
    	return redirect('/team');
    	
    }

    public function destroy($id){
    	$teams = Team::find($id);
    	$teams->delete();

    	Session::flash('team_deleted','Record deleted successfully');
    	return redirect('team');
    }

    public function show($id){
        $teams = Team::find($id);
        return view('/team/view')
            ->with('teams',$teams);
    }



}
