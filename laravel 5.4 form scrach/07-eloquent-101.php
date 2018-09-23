<?php

php artisan make:model Task
php artisan tinker
App\Task::all();
App\Task::where('id', '>', 2)->get();
App\Task::pluck('body');
App\Task::pluck('body')->first();
php artisan make:model Task -m 


class Task extends Model 
{
	public function isComplete()
	{
		return false;
	}

	public function scopeIncomplete($query)
	{
		return $query->where('completed', 0);
	}
}

$task = App\Task::first();
$task->isComplete();

$task = new App\Task;
$task->body = 'hello there';
$task->isComplete = false;
App\Task::where('completed', 1)->get();

App\Task::incomplete()->where('id', '>=', 2)->get();