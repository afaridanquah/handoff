<?php

use App\Post;
use Carbon\Carbon;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
$activities = Activity::user()->get();

// Loop through and echo user's name
foreach ($activities as $activity) {
    echo $activity->user->name . '<br>';
}



Route::get('/', function () {
    return view('login.main');
});
Route::get('login',array('uses' => 'HomeController@showLogin'));
Route::post('login',array('uses' => 'HomeController@doLogin'));
Route::get('testcron', function (){

$date = Carbon::now();
// $date = new Carbon(-5);
// $date = Carbon::now(new DateTimeZone('America/Chicago'));
$date = Carbon::now('America/Chicago');
$end_date = $date->addMinutes(30);
$end_date2 = $date->addMinutes(31);
$post = Post::where('todo_datetime', '=', $date);
	// $post = Post::all();
				$subject = "Reminder";
				foreach($post as $post){
				$ticket = $post->ticket;
                $app_name =$post->app_name;
                $handover_to = $post->handover_to;
                $description =$post->description;
                $todo_datetime =$post->todo_datetime;
                
           		Mail::send('email.reminder',['ticket' => $ticket, 'app_name' =>$app_name, 'handover_to' => $handover_to, 'description' => $description ], function($message) use ($subject) {
                $message->to('msafaridanquah@gmail.com')
                ->subject($subject) ;
                }); 
                
         }
        // echo $reminder;
        echo $date;
         // ->this('Sent Successfully');
});

	


Route::group(array('before' => 'auth'), function(){
	

	Route::get('dashboard','DashboardController@index');
	Route::resource('team','TeamController');
	Route::resource('post','PostController');
	Route::resource('user','UserController');
	Route::get('store','StoreController@index');
	Route::get('logout', array('uses' => 'HomeController@doLogout'));
	Route::controllers([
   'password' => 'Auth\PasswordController',
]);


});


/*$router->group(['middleware' => ['auth', 'admin']], function($router)
{
    
});*/


/*Route::group(['middleware' => ['web']], function () {
	
	
});*/

// Route::get('profile', ['middleware' => 'auth', function() {
//     // Only authenticated users may enter...
// }]);


