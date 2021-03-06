<?php

php artisan make:migration --create=tasks
php artisan migrate

Route::get('/tasks', function(){

	$tasks = DB::table('tasks')->get();
	$tasks = DB::table('tasks')->latest()->get();
	return view('tasks.index', compact('tasks'));
});

Route::get('/tasks/{task}', function($id){

	$task = DB::table('tasks')->find($id);
	
	return view('tasks.show', compact('task'));
});

