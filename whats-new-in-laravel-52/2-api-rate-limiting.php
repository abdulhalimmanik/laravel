<?php 

Route::get('/api/search/{term}', function($term){
	return [
		'results' => $term
	];
})->middleware('throttle:3');