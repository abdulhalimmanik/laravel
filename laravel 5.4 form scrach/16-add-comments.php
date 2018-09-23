<?php
Route::post('/posts/{post}/comments', 'CommentsController@store');

show.blade.php

<div class="card">
    <div class="card-body">
        <form method="POST" action="/posts/{{ $post->id }}/comments/">
            {{ csrf_field() }}
            <div class="form-group">
                <textarea name="body" placeholder="Your comment here" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Add Comment</button>
            </div>
        </form>
    </div>
</div>

CommentsController.php

namespace App\Http\Controllers;

use App\Post;
use App\Comment;

class CommentsController extends Controller
{
    public function store(Post $post)
    {

        $post->addComment(request('body'));

        return back();
    }
}

Post.php
namespace App;
use View;

class Post extends Model
{

    public function comments()
    {
        return $this->hasMany(Comment::class);    
    }

    public function addComment($body)
    {
        $this->comments()->create(compact('body'));
    }
}
