<?php

Route::get('/', 'PostsController@index');
Route::get('/posts/create', 'PostsController@create');
Route::post('/posts', 'PostsController@store');
Route::get('/posts/{post}', 'PostsController@show');
Route::post('/posts/{post}/comments', 'CommentsController@store');
// Posts resource
// GET /posts for viewing
// GET /posts/create for creation ( where the form is at now)
//  POST /posts storing the created post
//  GET /posts/{id}/edit to edit you go to slug or id /edit
//  PATCH /posts/{id} to update post based on edit
//  DELETE /posts{id}