<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{

    // relationship tag has many post
    public function posts()
    {
        return $this->belongsToMany('App\Post');
    }
}
