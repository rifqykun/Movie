<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class genre extends Model
{
    public function movie()
    {
        return $this->hasMany('App\movie');
    }
}
