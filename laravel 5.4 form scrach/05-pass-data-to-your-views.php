<?php

Route::get('/', function(){

	return view('about', [
		'name' => 'world',
		'age' => 3
	]);
});

Route::get('/', function(){

	return view('about')->with('name', 'world');
});

Route::get('/', function(){
	$name = 'jeff';
	return view('about', ['name' => $name]);
});

Route::get('/', function(){
	$name = 'jeff';
	return view('about', compact('name'));
});


Route::get('/', function(){

	$tasks = [
		'hello',
		'everyone'
	];
	return view('about', compact('tasks'));
});