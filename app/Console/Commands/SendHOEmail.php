<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Post;

use Mail;

use Carbon\Carbon;

class SendHOEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'handoff:email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command will send check and send handoff emails every second';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
     
     $date = Carbon::now();
// $date = new Carbon(-5);
// $date = Carbon::now(new DateTimeZone('America/Chicago'));
$date = Carbon::now('America/Chicago');
$end_date = $date->addMinutes(30);
$end_date2 = $date->addMinutes(31);
$post = DB::table('POST')->where('todo_datetime','2016-07-28 01:40:00');
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
        // echo $end_date;
         $this->info('Sent Successfully');
         
    }
           
                 
    
}
