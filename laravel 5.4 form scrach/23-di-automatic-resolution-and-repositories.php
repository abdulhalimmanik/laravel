<?php 

Posts.php

namespace App\Repositories;

class Posts 
{
	public function all()
	{
		return Post::all();
	}
}

PostsController.php 

public function index(Posts $posts)
{   
    $posts = Post::latest()
        ->filter(request(['month', 'year']))
        ->get();

 
    return view('posts.index', compact('posts'));
}