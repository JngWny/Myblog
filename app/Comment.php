<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    // set up relatiionship -- a comment has a single post
    public function post()
    {
        return $this->belongsTo('App\Post');
    }
}
