<?php 

factory(App\User::class, 3)->create();
Route::get('user/{user}', function(App\User $user){ return $user; });