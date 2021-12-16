<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    public function question()
    {
        return $this->belongsTo('App\Question');
    }
    public function user() {
        return $this->belongsTo('App\User');
    }
    public function goods() {
        return $this->hasMany('App\Good');
    }
}
