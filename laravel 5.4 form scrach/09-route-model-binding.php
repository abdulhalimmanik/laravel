<?php

Route::get('/tasks/{task}', 'TasksController@show');

public function show(Task $task)
{
	return $task;
}