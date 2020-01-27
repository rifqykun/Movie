<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class time extends Model
{
    public function movie()
    {
        return $this->hasMany('App\movie');
    }
}
