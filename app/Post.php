<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
// a post can have a single category
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

// relationship--  a post can have many tags
    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }

// relationship for a post can have many comments
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}
