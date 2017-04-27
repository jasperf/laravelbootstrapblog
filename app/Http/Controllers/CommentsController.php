<?php

namespace App\Http\Controllers;

use App\Post;
use App\Comment;

class CommentsController extends Controller
{
    // route model binding
    public function store (Post $post) 
    {
        $post->addComment(request('body'));
        // long form
        //  Comment::create ([
        //     'body' => request('body'),
        //     'post_id' => $post->id
        // ]);

        return back();
    }
}
