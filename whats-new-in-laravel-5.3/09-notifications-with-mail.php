<?php 

php artisan make:notification LessonPublished
use App\Notifications\LessonPublished;

Route::get('/', function(){
	$user = App\User::first();
	$lesson = App\Lesson::first(); 

	$user->notify(new LessonPublished($lesson));
});
