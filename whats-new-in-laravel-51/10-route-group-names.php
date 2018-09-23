<?php 

Route::group(['prefix' => 'admin', 'as' => 'Admin.'], function(){

	Route::get('home', ['as' => 'home', function(){
			return 'some view';
	}]);
});

dd(route('Admin::home'));

practice last 4