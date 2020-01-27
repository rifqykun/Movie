<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class movie extends Model
{
    public function city()
    {
        return $this->belongsTo('App\city');
    }
    public function time()
    {
        return $this->belongsTo('App\time');
    }
    public function genre()
    {
        return $this->belongsTo('App\genre');
    }
}
