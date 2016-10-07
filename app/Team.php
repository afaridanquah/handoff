<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = array('name','team_dl');
    
    public function users()
    {
    	return $this->belongsTo('App\User');
    }
}
