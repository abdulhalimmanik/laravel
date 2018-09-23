<?php

$posts = App\Post::all();
$posts->each->activate();
$posts->pluck('title');
$posts->map->title;

class Post extends Model 
{

	public function activate()
	{
		$this->update(['active' => true]);
	}
}