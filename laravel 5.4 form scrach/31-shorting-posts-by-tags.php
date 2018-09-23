<?php 

sidebar.blade.php 
<div class="p-3">
<h4 class="font-italic">Tags</h4>
<ol class="list-unstyled mb-0">
    @foreach($tags as $tag)
        <li><a href="/posts/tags/{{ $tag }}">{{ $tag }}</a></li>
    @endforeach
</ol>
</div>

show.blade.php 
@if(count($post->tags))
    <ul>
        @foreach($post->tags as $tag)
            <li><a href="/posts/tags/{{ $tag->name }}">{{ $tag->name }}</a></li>
        @endforeach
    </ul>
@endif

AppServiceProvider.php 

public function boot()
{
    //
    Schema::defaultStringLength(191);
    
    view()->composer('layouts.sidebar', function($view){
        $view->with('archives', \App\Post::archives());
        $view->with('tags', \App\Tag::has('posts')->pluck('name'));
    });
}

TagsController.php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;
class TagsController extends Controller
{
    public function index(Tag $tag)
    {
    	$posts = $tag->posts;

    	return view('posts.index', compact('posts'));
    }
}

Tag.php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }

    public function getRouteKeyName()
    {
    	return 'name';
    }
}

web.php 
Route::get('/posts/tags/{tag}', 'TagsController@index');