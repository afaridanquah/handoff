<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Validator;

use Session;

use App\Post;

use Carbon\Carbon;

use DB;

use Mail;

use Input;

use App\Team;

use Illuminate\Pagination\LengthAwarePaginator;

use Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        // $loggedInTeam = Auth::user()->team_id;
        $team_id = Auth::user()->team_id;
        $userType = Auth::user()->admin;
        if($userType == 'admin'){
            $posts = Post::all();
        }else{
            $posts = DB::table('posts')->where('team_id','=',$team_id)->get();
        }
        
        return view('post.main')
            ->with('posts',$posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $teams = array();

        foreach (Team::all() as $team) {
            $teams[$team ->id] = $team->team_dl;
        }

        $validator = Validator::make($request->all(), [
                'ticket'=>'max:15',
                'app_name'=>'max:40|min:2',
                'description'=>'required|max:1000|min:2',
                'handover_to'=>'max:50|min:2',
                'todo_datetime'=>'required|min:2',
            ]);
        if($validator->fails()){
            return redirect('post/create')
                ->withInput()
                ->withErrors($validator);
        }
        $team_id = Auth::user()->team_id;
        $created_by =Auth::user()->username;
        $team_email = Auth::user()->team_dl;
        $post = new Post;
        $post->ticket = $request->ticket;
        $post->app_name = $request->app_name;
        $post->description = $request->description;
        $post->handover_to = $request->handover_to;
        $post->todo_datetime = $request->todo_datetime;
        $post->team_id = $team_id;
        $post->created_by = $created_by;

        $handover = 'HO' ;
        $ticket = $request ->Input('ticket');
        $app_name = $request ->Input('app_name');
        $description = $request ->Input('description');
        $handover_to = $request ->Input('handover_to');
        $todo_datetime =$request->Input('todo_datetime');
        $time_created = time();
        $time_created = date("Y-m-d",$time_created);
        // $created_at = date('F d, Y', strtotime($post->created_at)

        $subject = $handover . " " .$time_created;
        $post->title = $subject;
        $team_dl = $post->team_dl;

        // $subject = "HI";
        $post->save();
        if($post->save()){
           Mail::send('email.sendemail',['ticket' => $ticket, 'app_name' =>$app_name, 'handover_to' => $handover_to, 'description' => $description ], function($message) use ($subject) {
                $message->to('msafaridanquah@gmail.com')
                ->subject($subject) ;
                });
        }
        Session::flash('rec_created', 'New record created successfully');
        return redirect('post/create');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posts = Post::find($id);
        return view('post.view')
            ->with('posts',$posts);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $posts = Post::findorfail($id);
        return view('post.edit')
            ->with('posts',$posts);
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
        $rules = array(
                'ticket'=>'max:15',
                'app_name'=>'max:40|min:2',
                'description'=>'required|max:1000|min:2',
                'handover_to'=>'max:50|min:2',
                'todo_datetime'=>'required|min:2',
                );
        $validator = validator::make(Input::all(), $rules);
        if($validator->fails()){
            return redirect('post/'. $post->id . '/edit')
                ->withErrors($validator)
                ->withInput();
        }
            $team_id = Auth::user()->team_id;

            $post = Post::find($id);
            $post->ticket = $request->Input('ticket');
            $post->app_name = $request->Input('app_name');
            $post->description = $request->Input('description');
            $post->handover_to = $request->Input('handover_to');
            $post->todo_datetime = $request->Input('todo_datetime');
            $post->team_id = $team_id;
            $post->save();

            Session::flash('post_updated', 'Record updated successfully');
            return redirect('post');

            // $post->created_by = $created_by;
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $posts = Post::find($id);
        $posts->delete();

        Session::flash('post_deleted','Record deleted successfully');
        return redirect('post');
    }
}
