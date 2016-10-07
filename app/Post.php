<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Post extends Model
{
    protected $fillable = array('ticket','app_name','handover_to','todo_datetime','description');


    public function setTodoDatetimeAttribute($tododatetime) {
    $this->attributes['todo_datetime'] = Carbon::parse($tododatetime)->toDateTimeString();
}

public function team(){
	return $this->hasOne('App\team');
}

public function myteam()
    {
        return $this->hasManyThrough('App\Post', 'App\User');
    }
}

