<?php

Route::prefix('api')->group(function(){

	Route::name('home')->get('/', function(){});

});

Route::name('dashboard')
	->middleware('auth')
	->get('/dashboard', function(){
		
	});