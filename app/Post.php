<?php

namespace App;

use App\Comment;

//use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function comments ()
    {
        return $this->hasMany(Comment::class);
    }

    public function addComment ($body) 
    {
        // $his->comments()->create()
        // $this pseudo-variable http://php.net/manual/en/language.oop5.basic.php
        // http://stackoverflow.com/questions/1523479/what-does-the-variable-this-mean-in-php#1523484
        $this->comments()->create(compact('body'));
    }
}
