<?php

php artisan make:controller TasksController

Route::get('/tasks', 'TasksController@index');

class TasksController extends controller
{

	public function index()
	{
		$tasks = Task::all();
		return view('tasks.index', compact('tasks'));
	}
}