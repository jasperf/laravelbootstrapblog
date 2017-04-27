<?php

namespace App\Http\Controllers;

use App\Post;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        // Post Model Class base on Eloquent Model
        // :: scope resolution operation
        // http://php.net/manual/en/language.oop5.paamayim-nekudotayim.php
        // all() get all posts from the datbase in this case
        $posts = Post::latest()->get();

        //http://php.net/manual/en/function.compact.php
        //array of variables and their values
        return view('posts.index', compact('posts'));
    }

    //public function show($id)
    //route model binding instead
    public function show(Post $post)
    {
        //$post = Post::find($id);

        return view('posts.show', compact('post'));
    }
    public function create()
    {
        return view('posts.create');
    }
    public function store()
    {
            $this->validate(request(), [
            'title' => 'required',
            'body' =>   'required'
            ]);
        
        // $post = new Post; // Post extension of Eloquent Model
        // $post->title = request('title');
        // $post->body = request('body');
        // //save to the database
        // $post->save(); // active records saving with Eloquent

        // Post::create([
        //     'title' => request('title'),
        //     'body' => request('body')
        //     ]);
        
        Post::create(request(['title', 'body']));
        
        //redirect to the homepage
        return redirect('/');
        // dd(request()->all());
        // create a new post using "request" data
        // save it to the database
        // redirect to the homepage ore elswhere
    }
}
