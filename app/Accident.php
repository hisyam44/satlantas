<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accident extends Model
{
    public function user(){
    	return $this->belongsTo('App\User');
    }
}
